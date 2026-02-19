<?php

namespace App\Orchid\Screens\Partner;

use App\Models\Partner;
use App\Orchid\Layouts\PartnerEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PartnerEditScreen extends Screen
{
    public ?Partner $partner = null;

    public function query(Partner $partner): iterable
    {
        $this->partner = $partner;

        return [
            'partner' => $partner,
        ];
    }

    public function name(): ?string
    {
        return ($this->partner?->exists)
            ? 'Редактирование партнёра'
            : 'Создание партнёра';
    }

    public function description(): ?string
    {
        return '';
    }

    public function layout(): iterable
    {
        return [
            Layout::block(PartnerEditLayout::class)
                ->title('Общая информация о партнёре')
                ->vertical(),
        ];
    }

    public function save(Partner $partner, Request $request): RedirectResponse
    {
        $data = $request->validate([
            'partner.name' => ['required', 'string', 'max:255'],
            'partner.job_profile' => ['nullable', 'string', 'max:255'],
            'partner.experience_years' => ['nullable', 'string', 'max:255'],
            'partner.description' => ['nullable', 'string'],
            'partner.image' => ['nullable', 'string', 'max:2048'],
            'partner.phone' => ['nullable', 'string', 'max:255'],
            'partner.work_time' => ['nullable', 'string', 'max:255'],
            'partner.whatsapp_link' => ['nullable', 'string', 'max:2048'],
            'partner.reviews_link' => ['nullable', 'string', 'max:2048'],
            'partner.rank' => ['nullable', 'integer'],
        ])['partner'];

        $partner->fill(Arr::only($data, $partner->getFillable()));
        $partner->save();

        Toast::info('Успешно');

        return redirect()->route('platform.systems.partners');
    }

    public function remove(Partner $partner): RedirectResponse
    {
        $partner->delete();

        Toast::info('Удалено успешно');

        return redirect()->route('platform.systems.partners');
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
                ->canSee((bool)($this->partner?->exists)),
        ];
    }
}
