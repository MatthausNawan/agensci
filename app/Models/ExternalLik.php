<?php

namespace App\Models;

use App\Traits\RandomOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class ExternalLik extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'external_liks';

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'site',
        'enabled',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at',
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeRandomAble($query, $lenght)
    {
        return $query->inRandomOrder()->limit($lenght);
    }

    public function scopeType($query, $category)
    {
        return $query->where('category_id', $category);
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function scopefilteredData($query, $request)
    {
        if ($request->sort == 'asc') {
            return $query->oldest();
        }

        if ($request->sort == 'desc') {
            return $query->latest();
        }

        if ($request->sort == 'a-z') {
            return $query->orderBy('name', 'asc');
        }

        if ($request->sort == 'z-a') {
            return $query->orderBy('name', 'desc');
        }
    }
}
