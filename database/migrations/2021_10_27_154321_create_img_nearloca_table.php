<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgNearlocaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_nearloca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('img');
            $table->string('nearloca');
            $table->unsignedBigInteger('hotel_id');
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('img_nearloca', function (Blueprint $table) {
           
            $table->dropForeign('img_nearloca_hotel_id_foreign');
        });
        Schema::dropIfExists('img_nearloca');
    }
}
