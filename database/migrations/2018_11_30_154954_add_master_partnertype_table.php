<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMasterPartnertypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_partnertype', function (Blueprint $table) {

            $table->string('code', 10)->unique();
            $table->string('typeName_th', 100);
            $table->string('typeName_en', 100);
           
            /*
        TOUR-Travel agent/TRANS-Transportation/FOOD-Restaurant
         */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_partnertype', function (Blueprint $table) {
            //

        });
    }
}
