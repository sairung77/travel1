<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dirId')->nullable();//
            $table->string('credentialsType',5);
            $table->string('description',1024);
            $table->integer('ownerProfileId');
            $table->integer('uploadUser');
            $table->string('hashing', 300);
            $table->string('fileName',220);
            $table->string('fileExtens',10);
            $table->binary('data');
            $table->string('backupFullPath',1024);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
               //-----indexes-----------
            $table->index(['ownerProfileId', 'credentialsType','uploadUser'], 'doc_idx');
            $table->index(['fileName', 'fileExtens'], 'search_idx');
            $table->index('dirId', 'dir_idx');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('document', function (Blueprint $table) {
            //
        });
    }
}
