<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('galleryId')->nullable();//
            $table->string('description',1024);
            $table->integer('profileRefId');
            $table->integer('partnerRefId');
            $table->integer('uploadUser');
            $table->string('fileName',220);
            $table->string('fileExtens',10);
            $table->binary('data');
            $table->string('backupFullPath',1024);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
             //-----indexes-----------
            $table->index(['profileRefId', 'partnerRefId','uploadUser'], 'ref_idx');
            $table->index('galleryId', 'galleryId_idx');
            $table->index(['fileName','fileExtens'], 'picsearch_idx');
        });
    }
    //$table->binary('data');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
