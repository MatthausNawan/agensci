<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Speaker extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'speakers';

    protected $appends = [
        'photo',
        'areas',
        'speeches'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'creator_id',
        'bio',
        'description',
        'areas',
        'books',
        'awards',
        'speeches',
        'articles',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // protected $casts = [
    //     'areas'=>'array',
    //     'books'=>'array',
    //     'awards'=>'array',
    //     'speeches'=>'array',
    //     'articles'=>'array'
    // ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function setArticlesAttribute($value)
    {
        $tags = explode(',',$value);        
        $this->attributes['articles'] = json_encode($tags);
    }

    public function getArticlesAttribute($value)
    {
        if($value){
            $tags = '';
            foreach(json_decode($value) as $tag ){
                $tags .= $tag. ",";
            }
            return $tags;
        }        
    }

    public function setBooksAttribute($value)
    {
        $tags = explode(',',$value);        
        $this->attributes['books'] = json_encode($tags);
    }

    public function getBooksAttribute($value)
    {
        if($value){
            $tags = '';
            foreach(json_decode($value) as $tag ){
                $tags .= $tag. ",";
            }
            return $tags;
        }        
    }

    public function setAwardsAttribute($value)
    {
        $tags = explode(',',$value);        
        $this->attributes['awards'] = json_encode($tags);
    }

    public function getAwardsAttribute($value)
    {
        if($value){
            $tags = '';
            foreach(json_decode($value) as $tag ){
                $tags .= $tag. ",";
            }
            return $tags;
        }        
    }

    public function setSpeechesAttribute($value)
    {
        $tags = explode(',',$value);        
        $this->attributes['speeches'] = json_encode($tags);
    }

    public function getSpeechesAttribute($value)
    {
        if($value){
            $tags = '';
            foreach(json_decode($value) as $tag ){
                $tags .= $tag. ",";
            }
            return $tags;
        }        
    }

    public function setAreasAttribute($value)
    {
        $tags = explode(',',$value);        
        $this->attributes['areas'] = json_encode($tags);
    }

    public function getAreasAttribute($value)
    {
        if($value){
            $tags = '';
            foreach(json_decode($value) as $tag ){
                $tags .= $tag. ",";
            }
            return $tags;
        }        
    }
}
