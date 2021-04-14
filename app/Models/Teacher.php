<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use \DateTimeInterface;

class Teacher extends Model
{
    use  HasMediaTrait;

    public $table = 'teachers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'genre',
        'birth-date',
        'formation',
        'specialty',
        'occupation-lattes',
        'resume-link',
        'profession',
        'class-council',
        'institution-works',
        'office',
        'enrollment-number',
        'cpf',
        'email',
        'cell-number',
        'whatsapp',
        'postal-code',
        'district',
        'country',
        'uf',
        'city',
        'linkedin',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'user_id',
        'deleted_at'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
