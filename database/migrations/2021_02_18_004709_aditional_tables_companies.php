<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AditionalTablesCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('fantasy-name')->nullable();
            $table->string('cnpj')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('address-number')->nullable();
            $table->string('postal-code')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('uf')->nullable();
            $table->string('phone')->nullable();
            $table->string('cell-number')->nullable();
            $table->string('email')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('logomarca')->nullable();
            $table->string('requester-name')->nullable();
            $table->string('requester-cpf')->nullable();
            $table->date('request-date')->nullable();
            $table->string('signature')->nullable();
            $table->string('stamp')->nullable();
        });
    }
}
