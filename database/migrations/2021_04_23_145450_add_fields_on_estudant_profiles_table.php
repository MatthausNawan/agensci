<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsOnEstudantProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_profiles', function (Blueprint $table) {
            $table->longText('monitorings')->nullable();
            $table->longText('articles')->nullable();
            $table->longText('awards')->nullable();
            $table->longText('speeches')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_profiles', function (Blueprint $table) {
            $table->dropColumn('speeches');
            $table->dropColumn('articles');
            $table->dropColumn('awards');
            $table->dropColumn('monitorings');
        });
    }
}
