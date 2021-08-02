<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('social_name')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('social_id')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_social_id')->nullable();
            $table->unsignedBigInteger('advertising_place_id');
            $table->json('reach_countries')->nullable();
            $table->json('reach_genres')->nullable();
            $table->json('reach_states')->nullable();
            $table->json('reach_cities')->nullable();
            $table->json('reach_categories')->nullable();
            $table->json('reach_segments')->nullable();
            $table->enum('media_type', ['VIDEO','IMAGE'])->nullable();
            $table->text('media_embed')->nullable();
            $table->string('media_link')->nullable();
            $table->string('media_file')->nullable();
            $table->decimal('total_price', 10, 2)->default(0);
            $table->boolean('enabled')->default(false);
            $table->enum('status', ['CREATED','CONFIRMED','PUBLISHED','FINISHED','REJECTED'])->default('CREATED');
            $table->text('reject_reason')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
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
        Schema::dropIfExists('advertisements');
    }
}
