<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Orchid\Layouts\ServiceEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ServiceEditScreen extends Screen
{
    public ?Service $service = null;

    public function query(Service $service): iterable
    {
        $this->service = $service;

        $detail = [];
        if ($service->detail_text) {
            $decoded = json_decode($service->detail_text, true);
            if (is_array($decoded)) {
                $detail = $decoded;
            }
        }

        $left = $detail['left'] ?? [];
        $right = $detail['right'] ?? [];

        return [
            'service' => $service,
            'service.detail_left' => implode("\n", $left),
            'service.detail_right' => implode("\n", $right),
            'service.gallery' => $service->exists
                ? $service->attachment()->where('group', 'service-gallery')->pluck('attachments.id')->toArray()
                : [],
        ];
    }

    public function name(): ?string
    {
        return ($this->service?->exists)
            ? 'Редактирование услуги'
            : 'Создание услуги';
    }

    public function description(): ?string
    {
        return '';
    }

    public function layout(): iterable
    {
        return [
            Layout::block(ServiceEditLayout::class)
                ->title('Общая информация об услуге')
                ->vertical()
                ->commands(
                    Button::make('Сохранить')
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->method('save')
                ),
        ];
    }

    public function save(Service $service, Request $request): RedirectResponse
    {
        $data = $request->validate([
            'service.partner_id' => ['nullable', 'integer', 'exists:partners,id'],
            'service.name' => ['required', 'string', 'max:255'],
            'service.slug' => ['nullable', 'string', 'max:255'],
            'service.preview_text' => ['nullable', 'string'],
            'service.detail_left' => ['nullable', 'string'],
            'service.detail_right' => ['nullable', 'string'],
            'service.price' => ['nullable', 'string', 'max:255'],
            'service.image' => ['nullable', 'string', 'max:255'],
            'service.rank' => ['nullable', 'integer'],
            'service.gallery' => ['nullable', 'array'],
        ])['service'];

        $left = array_values(array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", $data['detail_left'] ?? ''))));
        $right = array_values(array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", $data['detail_right'] ?? ''))));

        $data['detail_text'] = json_encode([
            'left' => $left,
            'right' => $right,
        ], JSON_UNESCAPED_UNICODE);

        unset($data['detail_left'], $data['detail_right']);


        // 🔥 Авто-генерация slug
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        // 🔥 Уникальность slug
        $originalSlug = $data['slug'];
        $i = 1;

        while (
        Service::where('slug', $data['slug'])
            ->where('id', '!=', $service->id ?? 0)
            ->exists()
        ) {
            $data['slug'] = $originalSlug . '-' . $i++;
        }

        $service->fill($data);
        $service->save();

        // sync gallery
        $service->attachment()->sync($data['gallery'] ?? []);

        Toast::info('Успешно');

        return redirect()->route('platform.systems.services');
    }

    public function remove(Service $service): RedirectResponse
    {
        $service->delete();

        Toast::info('Удалено успешно');

        return redirect()->route('platform.systems.services');
    }

    public function commandBar(): iterable
    {
        return [
            Button::make('Сохранить')
                ->icon('bs.check-circle')
                ->method('save'),

            Button::make('Удалить')
                ->icon('bs.trash3')
                ->confirm('Подтверждение удаления')
                ->method('remove')
                ->canSee($this->service->exists),
        ];
    }
}
