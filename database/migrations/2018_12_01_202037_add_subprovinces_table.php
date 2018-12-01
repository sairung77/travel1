<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubprovincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subprovinces', function (Blueprint $table) {
  
            $table->increments('SUBPROVINCE_ID');
            $table->string('SUBPROVINCE_CODE',1);
            $table->string('SUBPROVINCE_NAME',1);
            $table->string('SUBPROVINCE_NAME_ENG',1);
            $table->integer('GEO_ID',1);
            $table->integer('PROVINCE_ID',5);
            $table->index(['SUBPROVINCE_CODE','SUBPROVINCE_NAME','SUBPROVINCE_NAME_ENG'],'SUBPROVINCE_INDEX');


        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subprovinces', function (Blueprint $table) {
            //
        });
    }
}
