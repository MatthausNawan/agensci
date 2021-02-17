<?php

use App\Models\Segment;
use Illuminate\Database\Seeder;

class SegmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $segments = [
            [
                'name' => "Exatas"
            ],
            [
                'name' => "Humanas"
            ],
            [
                'name' => "Saúde"
            ],
            [
                'name' => "Tecnologia"
            ],
        ];

        Segment::insert($segments);
    }
}
