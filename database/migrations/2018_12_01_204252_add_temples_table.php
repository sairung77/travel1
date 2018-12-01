<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTemplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temples', function (Blueprint $table) {
            $table->integer('id')->increments();
            $table->string('t_name',50);
            $table->string('t_sect', 220);
            $table->string('t_num', 50);
            $table->string('t_moo',50);
            $table->string('t_soi',50 );
            $table->string('t_road', 50);
            $table->string('district',220 );
            $table->string('subprovince', 220);
            $table->string('province',220 );
            $table->string('geography',220 );
            $table->string('budd_geo', 10);
            $table->string('zipcode',50 );
            $table->string('t_phone1', 50);
            $table->string('t_phone2',50);
            $table->string('fax',50 );
            $table->string('website', 50);
            $table->string('email', 50);
            $table->string('googleMap', 250);
            $table->index(['t_name','district','subprovince','province'],'temples_indx');;
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temples', function (Blueprint $table) {
            //
        });
    }
}
