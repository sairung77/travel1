<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMasterCredentialstypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_credentialstype', function (Blueprint $table) {
            $table->string('code',5)->unique();
            $table->string('name_th',150);//  Dont'forget add index.
            $table->string('name_en',150);
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }
/** 
 * 00 - general  
 * 01 - certificate/credentials/license  เอกสารระบุตัวตน
 * 02 - land certificate หนังสือสำคัญแสดงสิทธิในที่ดิน
 * 03 - partner agreement หนังสือสัญญา
 * 
 * 
 * 
*/


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_credentialstype', function (Blueprint $table) {
            //
        });
    }
}
