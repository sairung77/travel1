<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMasterPackagestatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_packagestatus', function (Blueprint $table) {
            //

            $table->string('statusCode')->unique();
            $table->string('desc_th',150);
            $table->string('desc_en',150);

        });
    }
  //1.3.3.1.DRAFT เค้าโครงร่าง
  //1.3.3.1.PUBLIC_DRAFT เปิดข้อมูลสาธารณะ
  //1.3.3.2.OPEN เปิดการจอง
  //1.3.3.3.OWNER_CANCELED ยกเลิกโดยบริษัท
  //1.3.3.4.EXPIRED ปิดการจอง
  //1.3.3.5.ADMIN_REJECT ยกเลิกโดยผู้ดูแลเว็บไซต์
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_packagestatus', function (Blueprint $table) {
            
        });
    }
}
