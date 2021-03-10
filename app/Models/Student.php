<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use \DateTimeInterface;

class Student extends Model
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'students';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'genre',
        'birth-date',
        'course-name',
        'specialization',
        'university-name',
        'matriculation',
        'occupation-lattes',
        'lattes-link',
        'cpf',
        'email',
        'phone',
        'whatsapp',
        'country',
        'uf',
        'city',
        'deleted_at'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
