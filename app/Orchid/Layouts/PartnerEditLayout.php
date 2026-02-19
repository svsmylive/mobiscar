<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class PartnerEditLayout extends Rows
{
    public function fields(): array
    {
        return [
            Input::make('partner.name')
                ->type('text')
                ->required()
                ->max(255)
                ->title('Название')
                ->placeholder('Название'),

            Input::make('partner.job_profile')
                ->type('text')
                ->title('Профиль работ')
                ->placeholder('Профиль работ'),

            Input::make('partner.experience_years')
                ->type('text')
                ->title('Лет опыта')
                ->placeholder('Лет опыта'),

            TextArea::make('partner.description')
                ->title('Описание')
                ->rows(5)
                ->placeholder('Описание'),

            Picture::make('partner.image')
                ->title('Фото партнёра')
                ->acceptedFiles('image/*')
                ->targetRelativeUrl()
                ->help('Загрузите фото. В БД сохраняется относительный путь (удобно для фронта).'),

            Input::make('partner.phone')
                ->type('text')
                ->title('Телефон')
                ->placeholder('Формат: 7 (999) 999-99-99'),

            Input::make('partner.work_time')
                ->type('text')
                ->title('Время работы')
                ->placeholder('К примеру, ежедневно с 10:00 - 20:00'),

            Input::make('partner.whatsapp_link')
                ->type('text')
                ->title('Ссылка на WhatsApp')
                ->placeholder('https://wa.me/...'),

            Input::make('partner.reviews_link')
                ->type('text')
                ->title('Ссылка на отзывы')
                ->placeholder('https://...'),

            Input::make('partner.rank')
                ->type('number')
                ->title('Порядковый номер на странице')
                ->placeholder('Например: 10'),
        ];
    }
}
