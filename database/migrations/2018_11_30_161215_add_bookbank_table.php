<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookbankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookbank', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('bankAccountNo', 100);
            $table->integer('profileRef');
            $table->integer('partnerRef');
            $table->string('bankAccountName', 220);
            $table->string('bankBranch', 220);
            $table->string('bankCode', 220);
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
        Schema::table('bookbank', function (Blueprint $table) {
            //
        });
    }
}
