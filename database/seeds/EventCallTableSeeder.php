<?php

use App\EventCall;
use Illuminate\Database\Seeder;

class EventCallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EventCall::class, 10)->create();
    }
}
