<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEventsTable extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('segment_id');
            $table->foreign('segment_id', 'segment_fk_2754975')->references('id')->on('segments');
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->foreign('creator_id', 'creator_fk_2756048')->references('id')->on('users');
        });
    }
}
