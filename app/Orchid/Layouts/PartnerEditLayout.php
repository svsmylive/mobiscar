<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class PartnerEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('partner.name')
                ->type('text')
                ->required()
                ->max(255)
                ->title(__('Название'))
                ->placeholder(__('Название')),

            Input::make('partner.job_profile')
                ->type('text')
                ->title(__('Профиль работ'))
                ->placeholder(__('Профиль работ')),

            Input::make('partner.experience_years')
                ->type('text')
                ->title(__('Лет опыта'))
                ->placeholder(__('Лет опыта')),

            Input::make('partner.services')
                ->type('text')
                ->title(__('Услуги'))
                ->placeholder(__('Перечеслять через запятую')),

            TextArea::make('partner.description')
                ->title(__('Описание'))
                ->placeholder(__('Описание')),

            Picture::make('partner.image')
                ->storage('public')
                ->title('Картинка')
                ->targetUrl(),

            Input::make('partner.phone')
                ->type('text')
                ->title(__('Телефон'))
                ->placeholder(__('Формат: 7 (999) 999-99-99')),

            Input::make('partner.work_time')
                ->type('text')
                ->title(__('Время работы'))
                ->placeholder(__('К примеру, ежедневно с 10:00 - 20:00')),

            Input::make('partner.whatsapp_link')
                ->type('text')
                ->title(__('Ссылка на whatsapp'))
                ->placeholder(__('Ссылка на whatsapp')),

            Input::make('partner.reviews_link')
                ->type('text')
                ->title(__('Ссылка на отзывы'))
                ->placeholder(__('Ссылка на отзывы')),

            Input::make('partner.rank')
                ->type('text')
                ->title(__('Порядковый номер на странице'))
                ->placeholder(__('Порядковый номер на странице')),
        ];
    }
}
