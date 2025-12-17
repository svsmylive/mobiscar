<?php

namespace App\Models;

use App\Orchid\Presenters\ArticlePresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'articles';
    protected $fillable = [
        'name',
        'slug',
        'preview_description',
        'detail_description',
        'image',
        'rank',
    ];

    public function scopeBySlug($query, string $slug): Builder
    {
        return $query->where('slug', $slug);
    }

    public function presenter(): ArticlePresenter
    {
        return new ArticlePresenter($this);
    }
}
