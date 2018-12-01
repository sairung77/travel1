<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provinces', function (Blueprint $table) {
               /**$
         * $table->integer('id')->unique();
            $table->zz('');
            $table->zz('',XXXX); 
            */

            $table->increments('PROVINCE_ID');
            $table->string('PROVINCE_CODE',2);
            $table->string('PROVINCE_NAME',150); 
            $table->string('PROVINCE_NAME_ENG',150);
            $table->integer('GEO_ID',5); 
            $table->index(['PROVINCE_CODE','PROVINCE_NAME','PROVINCE_NAME_ENG'], 'PROVINCE_INDEX');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            //
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provinces', function (Blueprint $table) {
            //
        });
    }
}
