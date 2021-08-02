<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('page')->nullable();
            $table->string('location')->nullable();
            $table->decimal('price', 10, 5)->default(0);
            $table->decimal('country_percent')->default(0);
            $table->decimal('genre_percent')->default(0);
            $table->decimal('category_percent')->default(0);
            $table->decimal('area_percent')->default(0);
            $table->decimal('days_percent')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local_advertisements');
    }
}
