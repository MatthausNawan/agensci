<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventCall extends Model
{
    use SoftDeletes;

    public const MEDIA_TYPE_SELECT = [
        'IMAGE' => 'Imagem',
        'VIDEO' => 'Video',
    ];

    public $table = 'event_calls';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'media',
        'media_type',
        'event_id',
        'creator',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
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
