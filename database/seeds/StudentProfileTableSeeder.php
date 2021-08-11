<?php

use App\Models\StudentProfile;
use Illuminate\Database\Seeder;

class StudentProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StudentProfile::class, 20)->create();
    }
}
