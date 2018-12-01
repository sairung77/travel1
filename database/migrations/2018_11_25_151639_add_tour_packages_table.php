<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTourPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleName_th',220);
            $table->string('titleName_en',220);
            $table->string('mainPlaceName_th',500);
            $table->string('mainPlaceName_en',500);
            $table->string('address',2000);
            $table->string('districtName',220);
            $table->string('subprovinceName',220);
            $table->string('provinceName',220);
            $table->string('geographyName', 220);
            $table->integer('mainPlaceId');
            $table->decimal('mainPlaceLatitude',11,8);//latitude longitude
            $table->decimal('mainPlaceLongitude',11,8);
            $table->longText('packageDesc_th');
            $table->longText('packageDesc_en');
            $table->dateTime('packageFeatured');
            $table->integer('partnerId');
            $table->dateTime('openDatetime');
            $table->dateTime('expireDatetime');
            $table->dateTime('checkinDatetime');
            $table->dateTime('checkoutDatetime');
            $table->integer('day');
            $table->integer('night');
            $table->string('appointmentPoint',500);
            $table->dateTime('appointmentDatetime');
            $table->integer('hotelId');
            $table->integer('galleryId');
            $table->string('agreementDetail',500);
            $table->integer('transportId1');
            $table->string('transport1Desc',500);
            $table->integer('transportId2');
            $table->string('transport2Desc',500);
            $table->integer('transportId3');
            $table->string('transport3Desc',500);

            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            //-----indexes-----------
            $table->index(['titleName_th', 'titleName_en'], 'packageSearch_idx');
            $table->index(['mainPlaceName_th', 'mainPlaceName_en'], 'packagePlace_idx');
            $table->index(['checkinDatetime', 'checkoutDatetime'], 'packageDate_idx');
            $table->index(['districtName', 'subprovinceName','provinceName','geographyName'], 'location_idx');
            //,'checkinDatetime', 'checkoutDatetime'
            //,'mainPointName_th', 'mainPointName_en']
            $table->index('partnerId', 'partnerId_idx');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_packages', function (Blueprint $table) {
            //
        });
    }
}
