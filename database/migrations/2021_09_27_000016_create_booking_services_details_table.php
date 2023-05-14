<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingServicesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_services_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qty');
            $table->string('price');
            $table->unsignedBigInteger('bookingroom_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('bookingroom_id')->references('id')->on('booking_rooms')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_services_details', function (Blueprint $table) {
            $table->dropForeign('booking_services_details_bookingroom_id_foreign');
            $table->dropForeign('booking_services_details_service_id_foreign');
        });
        Schema::dropIfExists('booking_services_details');
    }
}
