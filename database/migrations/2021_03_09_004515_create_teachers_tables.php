<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('genre')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('formation')->nullable();
            $table->string('speciality')->nullable();
            $table->string('occupation_lattes')->nullable();
            $table->string('resume_link')->nullable();
            $table->string('profession')->nullable();
            $table->string('class_council')->nullable();
            $table->string('institution_works')->nullable();
            $table->string('office')->nullable();
            $table->string('enrollment_number')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email')->nullable();
            $table->string('cell_number')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('uf')->nullable();
            $table->string('city')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }
}
