<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnership', function (Blueprint $table) {
            $table->increments('id');
            $table->string('partnerName_th',220);
            $table->string('partnerName_en',220);
            $table->string('partnerDesc_th',1024);
            $table->string('partnerDesc_en',1024);
            $table->integer('certificatesDir');
            $table->integer('agreementOfpartnerDir');
            $table->string('partnerType', 10);//TOUR-Travel agent/TRANS-Transportation/FOOD-Restaurant
            $table->string('remark',2048);
            $table->integer('ownerProfileId');
            $table->integer('galleryId');
            $table->integer('addressId');
            $table->string('urlReference',350);
            $table->string('urlFacebook',350);
            $table->string('idline',100);
            $table->integer('createrId');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
               //-----indexes-----------
            $table->index(['partnerName_th','partnerName_en'], 'partner_idx');
            $table->index('partnerType', 'partnerType_idx');
            $table->index('ownerProfileId', 'ownerProfile_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partnership', function (Blueprint $table) {
            //
        });
    }
}
