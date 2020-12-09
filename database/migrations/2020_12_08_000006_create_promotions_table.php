<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('entity')->nullable();
            $table->longText('type')->nullable();
            $table->longText('thematic')->nullable();
            $table->decimal('resources_amount', 15, 2)->nullable();
            $table->string('subscription_period')->nullable();
            $table->string('edital_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
