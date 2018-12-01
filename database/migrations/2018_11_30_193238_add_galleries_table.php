<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
              $table->increments('id');
            $table->integer('coverPicId');
            $table->string('ownerProfileId',220);
            $table->string('galleryName',220);
            $table->integer('createBy');
            $table->string('backupPath',220);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            //-----indexes-----------
            $table->index('galleryName', 'galleryName_idx');
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
        Schema::table('galleries', function (Blueprint $table) {
            //
        });
    }
}
