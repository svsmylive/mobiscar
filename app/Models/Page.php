<?php

namespace App\Models;

use App\Orchid\Presenters\PagePresenter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Page extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'pages';
    protected $fillable = [
        'name',
        'code',
        'url',
        'title',
        'description',
    ];

    public function scopeByCode($query, $code): Builder
    {
        return $query->where('code', $code);
    }

    public function presenter(): PagePresenter
    {
        return new PagePresenter($this);
    }
}
