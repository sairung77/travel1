<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTourPackageIncludesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_package_includes', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('packageId');
            $table->integer('includeId');
            $table->string('remark_th',1024);
            $table->string('remark_en',1024);

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            //-----indexes-----------
            $table->index('packageId', 'package_idx');
            $table->index('includeId', 'include_idx');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_package_includes', function (Blueprint $table) {
            //
        });
    }
}
