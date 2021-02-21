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
            $table->string('fantasy-name', 255);
            $table->string('cnpj', 20);
            $table->string('address', 255);
            $table->string('address-number', 255);
            $table->string('postal-code', 20);
            $table->string('district', 255);
            $table->string('city', 255);
            $table->string('uf', 20);
            $table->string('phone', 20);
            $table->string('cell-number', 20);
            $table->string('email', 255);
            $table->string('linkedin', 255);
            $table->string('facebook', 255);
            $table->string('whatsapp', 255);
            $table->string('instagram', 255);
            $table->string('twitter', 255);
            $table->string('youtube', 255);
            $table->string('logomarca', 255)->nullable();
            $table->string('requester-name');
            $table->string('requester-cpf');
            $table->string('request-date', 255);
            $table->string('signature', 255)->nullable();
            $table->string('stamp', 255)->nullable();
        });
    }
}
