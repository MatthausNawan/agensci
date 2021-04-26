<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsOnSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->longText('books')->nullable();
            $table->longText('articles')->nullable();
            $table->longText('awards')->nullable();
            $table->longText('speeches')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->longText('books')->nullable();
            $table->longText('articles')->nullable();
            $table->longText('awards')->nullable();
            $table->longText('speeches')->nullable();
        });
    }
}
