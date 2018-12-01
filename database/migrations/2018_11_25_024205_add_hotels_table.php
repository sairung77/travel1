<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotelName_th',220);
            $table->string('hotelName_en',220);
            $table->string('hotelDesc',1024);
            $table->integer('ranking');
            $table->integer('contactProfileId');
            $table->string('urlReference',350);
            $table->string('urlFacebook',350);
            $table->string('idline',100);
            $table->integer('addressId');
            $table->string('address',2000);
            $table->string('districtName',220);
            $table->string('subprovinceName',220);
            $table->string('provinceName',220);
            $table->string('geographyName', 220);
            $table->integer('galleryId');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
             //-----indexes-----------
            $table->index(['districtName', 'subprovinceName','provinceName','geographyName'], 'hotelLocation_idx');
            $table->index('hotelName_th', 'hotelName_idx');
            $table->index('ranking', 'ranking_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
