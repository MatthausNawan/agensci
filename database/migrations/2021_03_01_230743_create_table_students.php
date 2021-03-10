<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('genre')->nullable();
            $table->date('birth-date')->nullable();
            $table->string('course-name')->nullable();
            $table->string('specialization')->nullable();
            $table->string('university-name')->nullable();
            $table->string('matriculation')->nullable();
            $table->string('occupation-lattes')->nullable();
            $table->string('lattes-link')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('country')->nullable();
            $table->string('uf')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
        });
    }
}
