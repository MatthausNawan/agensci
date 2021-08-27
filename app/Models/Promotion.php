<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Promotion extends Model
{
    use SoftDeletes;

    public $table = 'promotions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'entity',
        'type',
        'thematic',
        'resources_amount',
        'subscription_period',
        'edital_link',
        'creator_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
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
            return $query->orderBy('entity','asc');
        }

        if($request->sort == 'z-a'){
            return $query->orderBy('entity','desc');
        }
    }
}
