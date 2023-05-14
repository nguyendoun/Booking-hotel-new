<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('booking_id');
            $table->integer('qty_total');
            $table->unsignedBigInteger('room_id');
            $table->string('order_code');
            $table->integer('subtotal');
            $table->date('startDate')->format('d-m-Y');
            $table->date('endDate')->format('d-m-Y');
            $table->integer('num_days');
            $table->integer('reduction');
            $table->integer('total');
            $table->string('note');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_rooms', function (Blueprint $table) {
            $table->dropForeign('booking_rooms_booking_id_foreign');
            $table->dropForeign('booking_rooms_room_id_foreign');
        });
        Schema::dropIfExists('booking_rooms');
    }
}
