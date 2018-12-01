<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMasterPackageSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_package_subcategory', function (Blueprint $table) {
            $table->string('subcatCode',5)->unique();
            $table->integer('packageCatId');//  Dont'forget add index.
            $table->string('pSubcatName_th',150);
            $table->string('pSubcatName_en',150);
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            //
            /*
            
>>>cat 01 - Natural (ทางธรรมชาติ)
01001 - mountain (ภูเขา)
01002 - lake (ทะเลสาบ)
01003 - river (แม่น้ำ)
01004 - waterfall (น้ำตก)
01005 - cave (ถ้ำ)
01006 - national park (อุทยานแห่งชาติ)
01007 - coast (ชายฝั่งทะเล)
01008 - beach (ชายหาด)
01009 - island (เกาะ)

>>>cat 02 - Built (สิ่งก่อสร้าง สถาปัตยกรรม)
02001 - temple (วัด)
02002 - castle (ปราสาท)
02003 - art gallery (หอศิลป์)
02004 - historic site (แหล่งทางประวัติศาสตร์)
02005 - archaeological site (แหล่งทางโบราณคดี)
02006 - museum (พิพิธภัณฑ์)
02007 - monument (อนุสรณ์สถาน)
02008 - theme park (ธีมปาร์ก)
02009 - palace (พระราชวัง)
02010 - heritage tourism (การท่องเที่ยวเชิงวัฒนธรรม)

>>>cat 03 - Entertainment & Leisure (บันเทิงและการพักผ่อน)
03001 - theatre (โรงละคร)
03002 - concert hall (คอนเสิร์ตฮอลล์)
03003 - nightclub (ไนท์คลับ)
03004 - casino (คาสิโน)
03005 - zoo (สวนสัตว์)
03006 - floating market (ตลาดน้ำ)
03007 - shopping mall (แหล่งช้อปปิ้ง, ห้างสรรพสินค้า)
03008 - sport centre (ศูนย์กีฬา)
03009 - sport stadium (สนามกีฬา)*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_package_subcategory', function (Blueprint $table) {
            //
        });
    }
}
