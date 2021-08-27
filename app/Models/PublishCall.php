<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublishCall extends Model
{
    use SoftDeletes;

    public $table = 'publish_calls';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'magazine',
        'issn',
        'qualis',
        'frequency',
        'dossie',
        'theme',
        'organizatin',
        'submission_period',
        'link',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

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
            return $query->orderBy('magazine','asc');
        }

        if($request->sort == 'z-a'){
            return $query->orderBy('magazine','desc');
        }
    }
}
