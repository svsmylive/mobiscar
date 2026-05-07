<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ApplicationController
{
    public function send(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:64'],
                'context_type' => ['nullable', 'in:service,partner,general'],
                'context_id' => ['nullable', 'integer'],
                'context_title' => ['nullable', 'string', 'max:255'],
                'context_url' => ['nullable', 'string', 'max:2048'],
                'referrer' => ['nullable', 'string', 'max:2048'],
                'utm_source' => ['nullable', 'string', 'max:255'],
                'utm_medium' => ['nullable', 'string', 'max:255'],
                'utm_campaign' => ['nullable', 'string', 'max:255'],
                'utm_content' => ['nullable', 'string', 'max:255'],
                'utm_term' => ['nullable', 'string', 'max:255'],
                'website' => ['nullable', 'string', 'max:255'],
                'hp_time' => ['nullable', 'string', 'max:32'],
                'activity_type' => ['nullable', 'sometimes', 'string'],
            ]);

            // 1) honeypot: если поле заполнено — бот
            if (!empty($data['website'])) {
                // делаем вид, что всё ок (чтобы боты не учились)
                return response()->json([
                    'success' => true,
                    'msg' => 'Данные успешно отправлены, наш менеджер свяжется с вами в ближайшее время!'
                ]);
            }

// 2) слишком быстрая отправка (менее 2 секунд) — почти всегда бот
            $hpTime = (int)($data['hp_time'] ?? 0);
            if ($hpTime > 0) {
                $elapsedMs = (int)(microtime(true) * 1000) - $hpTime;

                if ($elapsedMs < 2000) {
                    return response()->json([
                        'success' => true,
                        'msg' => 'Данные успешно отправлены, наш менеджер свяжется с вами в ближайшее время!'
                    ]);
                }
            }

            $phoneNormalized = $this->normalizePhone($data['phone']);

            $type = $data['context_type'] ?? 'general';
            $typeLabel = match ($type) {
                'service' => 'Услуга',
                'partner' => 'Партнёр',
                default => 'Общее',
            };

            $title = $data['context_title'] ?? null;
            $url = $data['context_url'] ?? null;
            $activityType = $data['activity_type'] ?? null;

            $createdAt = now()->timezone('Europe/Moscow')->format('d.m.Y H:i');

            // Красивое HTML-сообщение для Telegram
            $lines = [];
            if (!empty($activityType)) {
                $lines[] = "📩 <b>Новая заявка \"Стать партнером\"</b>";
            } else {
                $lines[] = "📩 <b>Новая заявка</b>";
            }

            $lines[] = "🕒 <b>Время:</b> {$createdAt}";
            $lines[] = "";
            $lines[] = "👤 <b>Имя:</b> " . e($data['name']);
            $lines[] = "📞 <b>Телефон:</b> <code>" . e($phoneNormalized) . "</code>";
            if (!empty($activityType)) {
                $lines[] = "🛠️ <b>Вид деятельности:</b> <code>" . e($activityType) . "</code>";
            }

            $lines[] = "";
            $lines[] = "📌 <b>Источник:</b> {$typeLabel}";

            $hasUtm = !empty($data['utm_source']) || !empty($data['utm_medium']) || !empty($data['utm_campaign'])
                || !empty($data['utm_content']) || !empty($data['utm_term']);

            if ($hasUtm || !empty($data['referrer'])) {
                $lines[] = "";
                $lines[] = "📣 <b>Маркетинг</b>";

                if (!empty($data['referrer'])) {
                    $lines[] = "↩️ <b>Referrer:</b> " . e($data['referrer']);
                }

                $utmParts = [];
                foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'] as $k) {
                    if (!empty($data[$k])) {
                        $utmParts[] = strtoupper(str_replace('utm_', '', $k)) . '=' . $data[$k];
                    }
                }
                if (!empty($utmParts)) {
                    $lines[] = "🏷️ <b>UTM:</b> " . e(implode(' | ', $utmParts));
                }
            }

            if ($title) {
                $lines[] = "🧩 <b>Что интересует:</b> " . e($title);
            }

            if ($url) {
                // Telegram понимает HTML-ссылки
                $safeUrl = e($url);
                $lines[] = "🔗 <b>Страница:</b> <a href=\"{$safeUrl}\">открыть</a>";
            }

            // Можно добавить тех. инфу (не обязательно)
            $lines[] = "";
            $lines[] = "🧾 <b>ID:</b> <code>" . Str::uuid() . "</code>";

            $msg = implode("\n", $lines);

            $token = config('services.telegram.bot_token');
            $chatId = config('services.telegram.chat_id');

            if (!$token || !$chatId) {
                return response()->json([
                    'success' => false,
                    'msg' => 'Сервис уведомлений не настроен.',
                ], 500);
            }

            $resp = Http::asForm()
                ->timeout(10)
                ->post("https://api.telegram.org/bot{$token}/sendMessage", [
                    'chat_id' => $chatId,
                    'text' => $msg,
                    'parse_mode' => 'HTML',
                    'disable_web_page_preview' => true,
                ]);

            if (!$resp->successful()) {
                return response()->json([
                    'success' => false,
                    'msg' => 'Не удалось отправить заявку. Попробуйте позже.',
                ], 500);
            }

            return response()->json([
                'success' => true,
                'msg' => 'Данные успешно отправлены, наш менеджер свяжется с вами в ближайшее время!',
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Внутренняя ошибка, попробуй отправить данные позже!',
            ], 500);
        }
    }

    private function normalizePhone(string $raw): string
    {
        $digits = preg_replace('/\D+/', '', $raw) ?? '';

        if ($digits === '') {
            return $raw;
        }

        // 8XXXXXXXXXX -> 7XXXXXXXXXX
        if (strlen($digits) === 11 && str_starts_with($digits, '8')) {
            $digits = '7' . substr($digits, 1);
        }

        // 9XXXXXXXXX -> 7 9XXXXXXXXX (если ввели без кода)
        if (strlen($digits) === 10 && str_starts_with($digits, '9')) {
            $digits = '7' . $digits;
        }

        // форматируем +7XXXXXXXXXX
        if (strlen($digits) === 11 && str_starts_with($digits, '7')) {
            return '+' . $digits;
        }

        // fallback
        return $raw;
    }
}
