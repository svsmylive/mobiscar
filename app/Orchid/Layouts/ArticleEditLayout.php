<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ArticleEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('article.name')
                ->type('text')
                ->required()
                ->max(255)
                ->title(__('Заголовок'))
                ->placeholder(__('Заголовок')),

            Input::make('article.slug')
                ->type('text')
                ->max(255)
                ->title(__('url'))
                ->placeholder(__('url')),

            TextArea::make('article.preview_description')
                ->title(__('Превью описание'))
                ->rows(3)
                ->placeholder(__('Превью описание')),

            TextArea::make('article.detail_description')
                ->title(__('Детальное описание'))
                ->rows(5)
                ->placeholder(__('Детальное описание')),

            Input::make('article.rank')
                ->type('number')
                ->title(__('Порядковый номер'))
                ->placeholder(__('Порядковый номер')),

            Picture::make('article.image')
                ->storage('public')
                ->title('Картинка')
                ->targetUrl(),
        ];
    }
}
