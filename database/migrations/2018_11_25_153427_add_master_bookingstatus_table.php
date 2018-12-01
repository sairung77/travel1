<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMasterBookingstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_bookingstatus', function (Blueprint $table) {
               $table->string('statusCode')->unique();
            $table->string('desc_th',150);
            $table->string('desc_en',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_bookingstatus', function (Blueprint $table) {
         
        });
        /*
        DRAFT : โครงร่าง
WAITING : รอการตรวจสอบ
APPROVED : อนุมัติโดยบริษัทจัดทริป
CANCEL : ยกเลิกโดยสมาชิก
REJECT : ปฏิเสธโดยผู้จัดทริป
EXPIRED : หมดอายุ เนื่องจากเลยระยะเวลาจอง
*/
    }
}
