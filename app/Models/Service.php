<?php

namespace App\Models;

use App\Orchid\Presenters\ServicePresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Service extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'services';
    protected $fillable = [
        'partner_id',
        'name',
        'slug',
        'preview_text',
        'detail_text',
        'price',
        'image',
        'rank',
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }

    public function presenter(): ServicePresenter
    {
        return new ServicePresenter($this);
    }
}
