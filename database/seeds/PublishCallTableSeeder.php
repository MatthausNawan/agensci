<?php

use App\Models\PublishCall;
use Illuminate\Database\Seeder;

class PublishCallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PublishCall::class, 20)->create();
    }
}
