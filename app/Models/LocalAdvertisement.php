<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocalAdvertisement extends Model
{
    // use SoftDeletes;

    public const PAGE_SELECT = [
        'HOME'             => 'Pagina Home',
        'TEACHER'          => 'Professor',
        'TEACHER_RESTRICT' => 'Professor Restrito',
        'STUDENT'          => 'Estudante',
        'STUDENT_RESTRICT' => 'Estudante Restrita',
        'COMPANY'          => 'Empresa',
        'COMPANY_RESTRICT' => 'Empresa Restrito',
        'DEFAULT'           => 'Pagina Padrão',
    ];

    public $table = 'local_advertisements';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'page',
        'location',
        'country_percent',
        'genre_percent',
        'category_percent',
        'area_percent',
        'days_percent',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
