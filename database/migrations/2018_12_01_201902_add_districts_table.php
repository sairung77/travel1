<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->increments('DISTRICT_ID');
            $table->string('DISTRICT_CODE', 6);
            $table->string('DISTRICT_NAME', 150);
            $table->string('DISTRICT_NAME_ENG',150);
            $table->integer('SUBPROVINCE_ID');
            $table->integer('PROVINCE_ID');
            $table->integer('GEO_ID');
            $table->index(['DISTRICT_CODE','DISTRICT_NAME','DISTRICT_NAME_ENG','SUBPROVINCE_ID','PROVINCE_ID'], 'DISTRICT_INDEX');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('districts', function (Blueprint $table) {
            //
        });
    }
}
