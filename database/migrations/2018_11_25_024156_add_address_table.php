<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ownerName',220);
            $table->string('placeName',220);
            $table->string('address',500);
           $table->integer('profileRef')->nullable();
           $table->integer('createBy');
           $table->integer('partnerRef')->nullable();
            $table->string('fullAddress',1024);
            $table->string('districtName',150);
            $table->string('subprovinceName',150);
            $table->string('provinceName',150);
            $table->string('postCode',2);
            $table->string('countryCode',2);
            $table->string('countryName',150);
            $table->decimal('latitude',11,8);//latitude longitude
            $table->decimal('longitude',11,8);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
             //-----indexes-----------

            $table->index(['ownerName','placeName','districtName','subprovinceName','provinceName','postCode','countryCode'], 'search_idx');
            $table->index(['profileRef','createBy','partnerRef'], 'refid_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('address');
    }
}
