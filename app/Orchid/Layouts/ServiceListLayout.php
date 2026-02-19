<?php

namespace App\Orchid\Layouts;

use App\Models\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ServiceListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'services';

    protected function columns(): iterable
    {
        return [
            TD::make('name', __('Услуга'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn(Service $service) => new Persona($service->presenter())),

            TD::make('price', __('Цена'))
                ->sort(),

            TD::make('rank', __('Порядковый номер'))
                ->sort(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Service $service) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Link::make(__('Редактировать'))
                            ->route('platform.systems.services.edit', $service->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Удалить'))
                            ->icon('bs.trash3')
                            ->confirm(__('Подтверждение удаления'))
                            ->method('remove', [
                                'id' => $service->id,
                            ]),
                    ])),
        ];
    }
}
