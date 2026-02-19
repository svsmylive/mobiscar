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
                'name'          => ['required', 'string', 'max:255'],
                'phone'         => ['required', 'string', 'max:64'],
                'context_type'  => ['nullable', 'in:service,partner,general'],
                'context_id'    => ['nullable', 'integer'],
                'context_title' => ['nullable', 'string', 'max:255'],
                'context_url'   => ['nullable', 'string', 'max:2048'],
            ]);

            $type = $data['context_type'] ?? 'general';
            $typeLabel = match ($type) {
                'service' => 'Услуга',
                'partner' => 'Партнёр',
                default   => 'Общее',
            };

            $title = $data['context_title'] ?? null;
            $url   = $data['context_url'] ?? null;

            $createdAt = now()->format('d.m.Y H:i');

            // Красивое HTML-сообщение для Telegram
            $lines = [];
            $lines[] = "📩 <b>Новая заявка</b>";
            $lines[] = "🕒 <b>Время:</b> {$createdAt}";
            $lines[] = "";
            $lines[] = "👤 <b>Имя:</b> " . e($data['name']);
            $lines[] = "📞 <b>Телефон:</b> <code>" . e($data['phone']) . "</code>";
            $lines[] = "";
            $lines[] = "📌 <b>Источник:</b> {$typeLabel}";

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
}
