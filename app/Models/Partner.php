<?php

namespace App\Models;

use App\Orchid\Presenters\PartnerPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Partner extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'partners';
    protected $fillable = [
        'name',
        'job_profile',
        'experience_years',
        'image',
        'phone',
        'work_time',
        'whatsapp_link',
        'reviews_link',
        'rank',
        'description',
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'partner_id', 'id');
    }

    public function presenter(): PartnerPresenter
    {
        return new PartnerPresenter($this);
    }
}
