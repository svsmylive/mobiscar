<?php

namespace App\Orchid\Layouts;

use App\Models\Partner;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PartnerListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'partners';

    protected function columns(): iterable
    {
        return [
            TD::make('name', __('Партнер'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn(Partner $partner) => new Persona($partner->presenter())),

            TD::make('job_profile', __('Профиль работы'))
                ->sort(),

            TD::make('work_time', __('Время работы'))
                ->sort(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Partner $partner) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Link::make(__('Редактировать'))
                            ->route('platform.systems.partners.edit', $partner->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Удалить'))
                            ->icon('bs.trash3')
                            ->confirm(__('Подтверждение удаления'))
                            ->method('remove', [
                                'id' => $partner->id,
                            ]),
                    ])),
        ];
    }
}
