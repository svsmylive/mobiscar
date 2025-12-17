<?php

namespace App\Orchid\Layouts;

use App\Models\Article;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ArticleListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'articles';

    protected function columns(): iterable
    {
        return [
            TD::make('name', __('Статья'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn(Article $article) => new Persona($article->presenter())),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Article $article) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Link::make(__('Редактировать'))
                            ->route('platform.systems.articles.edit', $article->id)
                            ->icon('bs.pencil'),
                        Button::make(__('Удалить'))
                            ->icon('bs.trash3')
                            ->confirm(__('Подтверждение удаления'))
                            ->method('remove', [
                                'id' => $article->id,
                            ]),
                    ])),
        ];
    }
}
