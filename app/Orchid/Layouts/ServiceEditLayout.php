<?php

namespace App\Orchid\Layouts;

use App\Models\Partner;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class ServiceEditLayout extends Rows
{
    public function fields(): array
    {
        return [
            Relation::make('service.partner_id')
                ->fromModel(Partner::class, 'name')
                ->title('Партнёр')
                ->required(),

            Input::make('service.name')
                ->type('text')
                ->required()
                ->max(255)
                ->title('Название'),

            Input::make('service.slug')
                ->type('text')
                ->max(255)
                ->title('Slug')
                ->help('Если оставить пустым — сгенерируется автоматически'),

            TextArea::make('service.preview_text')
                ->rows(3)
                ->title('Короткое описание'),

            TextArea::make('service.detail_left')
                ->rows(10)
                ->title('Детальное описание — левая колонка')
                ->help('Один абзац = одна строка'),

            TextArea::make('service.detail_right')
                ->rows(10)
                ->title('Детальное описание — правая колонка')
                ->help('Один абзац = одна строка'),

            Input::make('service.price')
                ->type('text')
                ->title('Цена')
                ->placeholder('Например: от 250 000'),

            Input::make('service.rank')
                ->type('number')
                ->title('Сортировка')
                ->value(100),

            Picture::make('service.image')
                ->title('Превью изображение')
                ->acceptedFiles('image/*')
                ->targetRelativeUrl(),

            Upload::make('service.gallery')
                ->title('Галерея (карусель)')
                ->groups('service-gallery')
                ->acceptedFiles('image/*')
                ->maxFiles(20),
        ];
    }
}
