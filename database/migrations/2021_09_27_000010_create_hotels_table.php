<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('category_id');
            $table->string('website');
            $table->string('description');
            $table->integer('star');
            $table->text('map');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropForeign('hotels_city_id_foreign');
            $table->dropForeign('hotels_category_id_foreign');
        });
        Schema::dropIfExists('hotels');
    }
}
