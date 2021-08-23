<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('banner')->nullable();
            $table->string('period')->nullable();
            $table->string('location')->nullable();
            $table->string('link')->nullable();
            $table->boolean('enabled')->default(0)->nullable();
            $table->unsignedBigInteger('creator_id')->nullable();
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
        Schema::dropIfExists('student_events');
    }
}
