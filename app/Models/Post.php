<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Post extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'posts';

    protected $appends = [
        'banner',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_APROVED = 1;
    const STATUS_PUBLISHED = 2;
    const STATUS_DENIED = 3;
    const STATUS_ARCHIVED = 4;
    const STATUS_PROCESSING = 5;

    const STATUS_SELECT = [
        '1' => 'Aprovado',
        '2' => 'Publicado',
        '3' => 'Negado',
        '4' => 'Arquivado',
        '5' => 'Em Análise'
    ];

    protected $fillable = [
        'title',
        'detail',
        'author_id',
        'slug',
        'enabled',
        'status',
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

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED)
            ->where('enabled', true);
    }

    public function scopefilteredData($query,$request)
    {        
        if($request->sort == 'asc'){
            return $query->oldest();
        }
        
        if($request->sort == 'desc'){
            return $query->latest();
        }

        if($request->sort == 'a-z'){
            return $query->orderBy('title','asc');
        }

        if($request->sort == 'z-a'){
            return $query->orderBy('title','desc');
        }
    }
}
