<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalLiksTable extends Migration
{
    public function up()
    {
        Schema::create('external_liks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('site')->nullable();
            $table->boolean('enabled')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
