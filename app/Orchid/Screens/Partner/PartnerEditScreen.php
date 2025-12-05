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
    /**
     * @var Partner
     */
    public $partner;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Partner $partner): iterable
    {
        return [
            'partner' => $partner,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->partner->exists ? 'Редактирование партнера' : 'Создание партнера';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return '';
    }

    public function layout(): iterable
    {
        return
            [
                Layout::block(PartnerEditLayout::class)
                    ->title(__('Общая информация о партнере'))
                    ->vertical()
                    ->commands(
                        Button::make(__('Save'))
                            ->type(Color::BASIC)
                            ->icon('bs.check-circle')
                            ->canSee($this->partner->exists)
                            ->method('save')
                    )
            ];
    }

    public function save(Partner $partner, Request $request): RedirectResponse
    {
        if ($partner->exists) {
            $partner->update(Arr::only($request->partner, $partner->getFillable()));
        } else {
            foreach ($request->partner as $key => $value) {
                $partner->$key = $value;
            }
            $partner->save();
        }


        Toast::info(__('Успешно'));

        return redirect()->route('platform.systems.partners');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Partner $partner): RedirectResponse
    {
        $partner->delete();

        Toast::info(__('Удалено успешно'));

        return redirect()->route('platform.systems.partners');
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Сохранить'))
                ->icon('bs.check-circle')
                ->method('save'),
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Подтверждение удаления'))
                ->method('remove')
                ->canSee($this->partner->exists),
        ];
    }
}
