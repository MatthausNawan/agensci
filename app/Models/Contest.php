<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Contest extends Model
{
    use SoftDeletes;

    public $table = 'contests';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'occupations',
        'salary',
        'vacancies',
        'requirements',
        'link',
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
            return $query->orderBy('title','asc');
        }

        if($request->sort == 'z-a'){
            return $query->orderBy('title','desc');
        }
    }
}
