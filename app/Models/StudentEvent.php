<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class StudentEvent extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $appends = [
        'banner',
    ];

    protected $fillable = [
        'title',
        'period',
        'location',
        'link',
        'creator_id',
        'enabled'
    ];

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

    public function scopeRandomAble($query, $lenght)
    {
        return $query->inRandomOrder()->limit($lenght);
    }
}
