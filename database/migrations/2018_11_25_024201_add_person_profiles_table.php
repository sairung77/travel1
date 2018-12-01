<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_profiles', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('surName',20);
            $table->integer('userId');
            $table->integer('partnerId');
            $table->string('firstName',150);
            $table->string('lastName',150);
            $table->string('personType',10);//natural  , corporate
            $table->integer('authenLevel');//3/2/1=ยืนยันเต็มรูปแบบ
            $table->string('nationality',150);//สัญชาติ
            $table->string('race',150);//เชื้อชาติ
            $table->string('idCard',13);
            $table->string('idPassport',20);
            $table->integer('addressId');
            $table->integer('presentAddressId');
            $table->string('phone',50);
            $table->string('fax',50);
            $table->string('email',150);
            $table->string('personNotifyName1',220);
            $table->string('personNotifyPhone1',20);
            $table->string('personNotifyName2',220);
            $table->string('personNotifyPhone2',20);
            $table->integer('galleryId');
            $table->integer('credentialsDirId');
            $table->integer('createBy');            
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
             //-----indexes-----------
            $table->index(['firstName', 'lastName','idCard', 'idPassport'], 'search_idx');
            $table->index(['userId','partnerId','createBy'], 'ref_idx');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_profiles');
    }
}
