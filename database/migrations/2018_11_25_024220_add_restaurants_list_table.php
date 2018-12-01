<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRestaurantsListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants_list', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('restaurantName_th',220);
            $table->string('restaurantName_en',220);

            $table->string('keywords',300);
            $table->string('featured',1024);
            $table->string('description',5000);
            $table->string('address',2000);
            $table->string('districtName',220);
            $table->string('subprovinceName',220);
            $table->string('provinceName',220);
            $table->string('geographyName', 220);
            $table->integer('galleryId');
            $table->integer('contactProfileId');
             //-----indexes-----------
            $table->index([ 'restaurantName_th','restaurantName_en','keywords'], 'search_idx');
              $table->index([ 'districtName','subprovinceName', 'provinceName','geographyName'], 'locations_idx');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants_list', function (Blueprint $table) {
            //
        });
    }
}
