<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMasterPackageIncludesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_package_includes', function (Blueprint $table) {
            //
            $table->integer('id')->unique();
            $table->string('includeDesc_th', 220);
            $table->string('includeDesc_en', 220);
            $table->string('includeType', 220);
            $table->string('includeRemark_th', 1024);
            $table->string('includeRemark_en', 1024);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_package_includes', function (Blueprint $table) {
            //
        });
    }
}
