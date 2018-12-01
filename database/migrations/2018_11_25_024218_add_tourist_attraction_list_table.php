<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTouristAttractionListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_attraction_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('touristAttraction_th',220);
            $table->string('touristAttraction_en',220);
            $table->string('touristAttractionDesc',3000);
            $table->string('address',2000);
            $table->string('districtName',220);
            $table->string('subprovinceName',220);
            $table->string('provinceName',220);
            $table->string('geographyName', 220);
            $table->string('keywords',300);
            $table->string('featuredPlace',5000);
            $table->string('urlRef',300);
            $table->string('facebookPage',300);
            $table->string('description',5000);
            $table->integer('galleryId');
            $table->integer('contactProfileId');
            $table->integer('createrId');
            $table->decimal('latitude',11,8);//latitude longitude
            $table->decimal('longitude',11,8);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
             //-----indexes-----------
              $table->index([ 'touristAttraction_th','touristAttraction_en','keywords'], 'search_idx');
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
        Schema::table('tourist_attraction_list', function (Blueprint $table) {
            //
        });
    }
}

/*1.3.2. Thailand

  1.3.2.1. จังหวัด

    1.3.2.1.1. อำเภอ

      1.3.2.1.1.1. ตำบล

        1.3.2.1.1.1.1. ที่อยู่สถานที่ท่องเที่ยว

          1.3.2.1.1.1.1.1. จุดเด่นสถานที่

          1.3.2.1.1.1.1.2. เบอร์โทรสถานที่

          1.3.2.1.1.1.1.3. ประเภทสถานที่

          1.3.2.1.1.1.1.4. ผู้ดูแลสถานที่

            1.3.2.1.1.1.1.4.1. ตำแหน่ง

            1.3.2.1.1.1.1.4.2. ชื่อ */