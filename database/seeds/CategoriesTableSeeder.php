<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Artigos',
                'description' => 'Pagina Home'
            ],
            [
                'name' => 'Orgãos Educacionais',
                'description' => 'Pagina Home'
            ],
            [
                'name' => 'Orgãos de Pesquisas',
                'description' => 'Pagina Home'
            ],
            [
                'name' => 'Universidades Publicas',
                'description' => 'Pagina Home'
            ],
            [
                'name' => 'Universidades Privadas',
                'description' => 'Pagina Home'
            ],
            [
                'name' => 'Universidades Internacionais',
                'description' => 'Pagina Home'
            ],
            [
                'name' => 'Laboratórios de Pesquisa',
                'description' => 'Pagina Professor'
            ],
            [
                'name' => 'Ongs',
                'description' => 'Pagina Professor'
            ],
            [
                'name' => 'Sociedades',
                'description' => 'Pagina Professor'
            ],
            [
                'name' => 'Conselhos de Classe',
                'description' => 'Pagina Professor'
            ],
            [
                'name' => 'Cursos',
                'description' => 'Pagina Estudante'
            ],
            [
                'name' => 'Entidades Estudantis',
                'description' => 'Pagina Estudante'
            ],
            [
                'name' => 'Bibliotecas Digitais',
                'description' => 'Pagina Estudante'
            ],
            [
                'name' => 'Museus Digitais',
                'description' => 'Pagina Estudante'
            ],
            [
                'name' => 'Programas de Estatisticas',
                'description' => 'Area Restrita Professor'
            ],
            [
                'name' => 'Aplicativos Uteis',
                'description' => 'Area Restrita Professor'
            ],
            [
                'name' => 'TVs Universitárias',
                'description' => 'Area Restrita Estudante'
            ],
            [
                'name' => 'Rádios Universitárias',
                'description' => 'Area Restrita Estudante'
            ],

        ];

        Category::insert($categories);
    }
}
