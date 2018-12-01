<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTourPackagesActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_packages_activities', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('packageId');
            $table->string('activityDesc_th',1024);
            $table->string('activityDesc_en',1024);
            $table->string('activityPlace_th',220);
            $table->string('activityPlace_en',220);
            $table->dateTime('activityDatetime_start');
            $table->dateTime('activityDatetime_end');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            //-----indexes-----------
            $table->index('packageId', 'package_idx');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_packages_activities', function (Blueprint $table) {
            
        });
    }
}
