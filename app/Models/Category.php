<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];



    const C_ARTIGOS = 1;
    const C_ORGAOS_EDUCACIONAIS = 2;
    const C_ORGAOS_DE_PESQUISA = 3;
    const C_UNIVERSIDADES_PUBLICAS = 4;
    const C_UNIVERSIDADES_PRIVADAS = 5;
    const C_UNIVERSIDADES_INTERNACIONAIS = 6;
    const C_LABORATORIOS_DE_PESQUISAS = 7;


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
