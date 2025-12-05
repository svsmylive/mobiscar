<?php

namespace App\Models;

use App\Orchid\Presenters\PartnerPresenter;
use Illuminate\Database\Eloquent\Model;
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
        'services',
        'image',
        'phone',
        'work_time',
        'whatsapp_link',
        'reviews_link',
        'rank',
        'description',
    ];

    public function presenter(): PartnerPresenter
    {
        return new PartnerPresenter($this);
    }
}
