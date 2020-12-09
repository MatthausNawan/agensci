<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToHeadlinesTable extends Migration
{
    public function up()
    {
        Schema::table('headlines', function (Blueprint $table) {
            $table->unsignedBigInteger('segment_id')->nullable();
            $table->foreign('segment_id', 'segment_fk_2755011')->references('id')->on('segments');
        });
    }
}
