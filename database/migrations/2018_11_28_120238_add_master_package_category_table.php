<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMasterPackageCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_package_category', function (Blueprint $table) {
            $table->integer('packageCatId')->unique();//  Dont'forget add index.
            $table->string('packageCatName_th',220);
            $table->string('packageCatName_en',220);
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            //
            /* 
            01 - Built (สิ่งก่อสร้าง สถาปัตยกรรม)
            02 - Natural (ทางธรรมชาติ)
            03 - Entertainment & Leisure (บันเทิงและการพักผ่อน)
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
        Schema::table('master_package_category', function (Blueprint $table) {
            //
        });
    }
}
