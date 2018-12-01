<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoreRunnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_runner', function (Blueprint $table) {
            $table->string('runnerType',20)->unique();//  Dont'forget add index.
            $table->string('runnerDesc',300);//  Dont'forget add index.
            $table->string('prefix',150);
            $table->integer('currentNum',150);
            //-----indexes-----------
            $table->index('runnerType', 'runner_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_runner', function (Blueprint $table) {
          
        });
    }
}
