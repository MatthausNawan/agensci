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
    const C_ONGS = 8;
    const C_SOCIEDADES = 9;
    const C_CONSELHOS_DE_CLASSE = 10;
    const C_CURSOS = 11;
    const C_ENTIDADES_ESTUDANTIS = 12;
    const C_BIBLIOTECAS_DIGITAIS = 13;
    const C_MUSEUS_DIGITAIS = 14;
    const C_PROGRAMAS_DE_ESTATISTICAS = 15;
    const C_APLICATIVOS_UTEIS = 16;
    const C_TV_UNIVERSITARIAS = 17;
    const C_RADIOS_UNIVERSITARIAS = 18;





    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
