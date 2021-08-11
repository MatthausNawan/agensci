<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publish_calls', function (Blueprint $table) {
            $table->id();
            $table->string('magazine')->nullable();
            $table->string("issn")->nullable();
            $table->string("qualis")->nullable();
            $table->string('frequency')->nullable();
            $table->text('dossie')->nullable();
            $table->string('theme')->nullable();
            $table->string('organization')->nullable();
            $table->string('submission_period')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('publish_calls');
    }
}
