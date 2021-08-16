<?php


use App\Models\LocalAdvertisement;
use Illuminate\Database\Seeder;

class LocalAdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = [
            [
                'name' => 'Página Home Topo',
                'page' => 'HOME',
                'location' => 'Topo',
                'price' => 2.00,
                'country_percent' => 0.6,
                'genre_percent' => 0.7,
                'category_percent' => 0.8,
                'area_percent' => 0.15,
                'days_percent' => 0.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Página Professor Lateral 1',
                'page' => 'TEACHER',
                'location' => 'Lateral 1',
                'price' => 6.00,
                'country_percent' => 0.2,
                'genre_percent' => 0.3,
                'category_percent' => 0.5,
                'area_percent' => 0.20,
                'days_percent' => 0.18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Página Estudante Lateral 1',
                'page' => 'STUDENT',
                'location' => 'Flutuante',
                'price' => 5.00,
                'country_percent' => 0.2,
                'genre_percent' => 0.3,
                'category_percent' => 0.5,
                'area_percent' => 0.20,
                'days_percent' => 0.18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Base Página Esdutante Restrita',
                'page' => 'ESTUDENT_RESTRICT',
                'location' => 'Base',
                'price' => 9.00,
                'country_percent' => 0.2,
                'genre_percent' => 0.3,
                'category_percent' => 0.5,
                'area_percent' => 0.20,
                'days_percent' => 0.18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pagina Padrão',
                'page' => 'DEFAULT',
                'location' => 'Topo',
                'price' => 9.00,
                'country_percent' => 0.2,
                'genre_percent' => 0.3,
                'category_percent' => 0.5,
                'area_percent' => 0.20,
                'days_percent' => 0.18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        LocalAdvertisement::insert($places);
    }
}
