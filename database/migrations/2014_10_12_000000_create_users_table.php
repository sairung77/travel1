<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->string('userCode',50)->unique();
            $table->string('password');
            $table->integer('groupId');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('profileId');
            $table->rememberToken();
            $table->timestamps();
             //-----indexes-----------
            $table->index(['username', 'userCode','groupId'], 'user_idx');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
