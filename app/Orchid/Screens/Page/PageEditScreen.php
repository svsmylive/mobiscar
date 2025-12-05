<?php

namespace App\Orchid\Screens\Page;

use App\Models\Page;
use App\Orchid\Layouts\PageEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PageEditScreen extends Screen
{
    /**
     * @var Page
     */
    public $page;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Page $page): iterable
    {
        return [
            'page' => $page,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->page->exists ? 'Редактирование страницы' : 'Создание страницы';
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
                Layout::block(PageEditLayout::class)
                    ->title(__('Общая информация о странице'))
                    ->vertical()
                    ->commands(
                        Button::make(__('Save'))
                            ->type(Color::BASIC)
                            ->icon('bs.check-circle')
                            ->canSee($this->page->exists)
                            ->method('save')
                    )
            ];
    }

    public function save(Page $page, Request $request): RedirectResponse
    {
        $page->update(Arr::only($request->page, $page->getFillable()));

        Toast::info(__('Успешно'));

        return redirect()->route('platform.systems.pages');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Page $page): RedirectResponse
    {
        $page->delete();

        Toast::info(__('Удалено успешно'));

        return redirect()->route('platform.systems.pages');
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
                ->canSee($this->page->exists),
        ];
    }
}
