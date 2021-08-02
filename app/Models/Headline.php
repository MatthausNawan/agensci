<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Headline extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'headlines';

    const TYPE_MAGAZINE = 'MAGAZINE';
    const TYPE_SITE = 'SITE';

    protected $appends = [
        'banner',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TYPE_SELECT = [
        'SITE'     => 'Site Cientifico',
        'MAGAZINE' => 'Revista Cientifica',
    ];

    protected $fillable = [
        'title',
        'details',
        'segment_id',
        'enabled',
        'magazine_id',
        'type',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getBannerAttribute()
    {
        $file = $this->getMedia('banner')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function segment()
    {
        return $this->belongsTo(Segment::class, 'segment_id');
    }

    public function magazine()
    {
        return $this->belongsTo(Magazine::class, 'magazine_id');
    }
}
