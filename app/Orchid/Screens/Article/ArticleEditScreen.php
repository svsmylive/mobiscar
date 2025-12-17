<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Orchid\Layouts\ArticleEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ArticleEditScreen extends Screen
{
    /**
     * @var Article
     */
    public $article;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Article $article): iterable
    {
        return [
            'article' => $article,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->article->exists ? 'Редактирование статьи' : 'Создание статьи';
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
                Layout::block(ArticleEditLayout::class)
                    ->title(__('Общая информация о статье'))
                    ->vertical()
                    ->commands(
                        Button::make(__('Save'))
                            ->type(Color::BASIC)
                            ->icon('bs.check-circle')
                            ->canSee($this->article->exists)
                            ->method('save')
                    )
            ];
    }

    public function save(Article $article, Request $request): RedirectResponse
    {
        if ($article->exists) {
            $article->update(Arr::only($request->article, $article->getFillable()));
        } else {
            foreach ($request->article as $key => $value) {
                $article->$key = $value;
            }
        }

        $slug = Str::slug($article->name);
        $article->slug = $slug;
        $article->save();

        Toast::info(__('Успешно'));

        return redirect()->route('platform.systems.articles');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Article $article): RedirectResponse
    {
        $article->delete();

        Toast::info(__('Удалено успешно'));

        return redirect()->route('platform.systems.articles');
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
                ->canSee($this->article->exists),
        ];
    }
}
