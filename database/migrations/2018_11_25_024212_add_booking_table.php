<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('bookingTitle',220);
            $table->string('bookingCode')->unique();
            $table->integer('customerUserId');           
            $table->integer('partnerTourId');
            $table->integer('packageId');
            $table->string('bookingStatus',20);
            $table->string('cancelReson',1024);
            $table->string('rejectReson',1024);
            $table->integer('rejectBy')->nullable();
            $table->dateTime('checkinDate');
            $table->dateTime('checkoutDate');
            $table->dateTime('approvedDate');
            $table->dateTime('rejectDate')->nullable();
            $table->dateTime('cancelDate')->nullable();
            $table->decimal('totalPackageAmount', 10, 2);
            $table->decimal('discountRate', 3, 2);
            $table->decimal('discountAmount', 10, 2);
            $table->decimal('commissionAmount', 10, 2);
            $table->decimal('vatRate', 3, 2);
            $table->decimal('vatAmount', 10, 2);
            $table->decimal('totalNetAmount', 10, 2);
            $table->decimal('paymentMethod', 10, 2);
            $table->integer('persons_adult');
            $table->integer('persons_child');
            $table->integer('persons_other');
            $table->string('persons_remark',1024);
            $table->integer('createBy');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
             //-----indexes-----------
            $table->index(['checkinDate', 'checkoutDate'], 'date_idx');
            $table->index('bookingCode', 'bookingCode_idx');
            //customerUserId
            $table->index('customerUserId', 'customer_idx');
            $table->index('partnerTourId', 'partner_idx');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
