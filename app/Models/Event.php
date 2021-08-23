<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Event extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'events';

    protected $appends = [
        'banner',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'segment_id',
        'category_id',
        'state_id',
        'country_id',
        'title',
        'start_date',
        'end_date',
        'subscripition_period',
        'enabled',
        'location',
        'link',
        'details',
        'is_collaborate_event',
        'creator_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'is_collaborate_event' => 'false'
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

    public function segment()
    {
        return $this->belongsTo(Segment::class, 'segment_id');
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
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

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category_id', $category);
    }
    
    public function scopeCountry($query, $country)
    {
        return $query->where('country_id', $country);
    }
    
    public function scopeState($query, $state)
    {
        return $query->where('state_id', $state);
    }

    public function scopeArea($query, $segment)
    {
        return $query->where('segment_id', $segment);
    }

    public static function getEvents($request)
    {
        return  Event::when($request->has('q_category'), function ($query) use ($request) {
            $query->orWhere('category_id', $request->q_category);
        })->when($request->has('q_area'), function ($query) use ($request) {
            $query->orWhere('segment_id', $request->q_area);
        })->when($request->has('q_state'), function ($query) use ($request) {
            $query->orWhere('state_id', $request->q_state);
        })->enabled()->get();
    }

    public static function scopeEnabled($query)
    {
        return $query->where('enabled', true);
    }

    public function scopeRandomAble($query, $lenght)
    {
        return $query->inRandomOrder()->limit($lenght);
    }

    public function scopeCollaborates($query)
    {
        return $query->where('is_collaborate_event', true);
    }
}
