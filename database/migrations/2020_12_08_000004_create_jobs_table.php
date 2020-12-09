<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company')->nullable();
            $table->string('area')->nullable();
            $table->string('type')->nullable();
            $table->string('formation')->nullable();
            $table->longText('profile')->nullable();
            $table->string('address')->nullable();
            $table->string('ocuppation')->nullable();
            $table->integer('qty_jobs')->nullable();
            $table->decimal('salary', 15, 2)->nullable();
            $table->datetime('expiration_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
