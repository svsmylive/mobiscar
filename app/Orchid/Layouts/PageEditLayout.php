<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class PageEditLayout extends Rows
{
    /**
     * The screen's layout elements.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('page.name')
                ->type('text')
                ->required()
                ->max(255)
                ->title(__('Название'))
                ->placeholder(__('Название')),

            Input::make('page.title')
                ->type('text')
                ->title(__('SEO Title'))
                ->placeholder(__('seo title')),

            TextArea::make('page.description')
                ->title(__('SEO Description'))
                ->rows(3)
                ->placeholder(__('seo description')),
        ];
    }
}
