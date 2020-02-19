<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmsCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crms_cars', function (Blueprint $table) {
            $table->bigIncrements('car_id')->unique();
            $table->integer('car_cat_id');
            $table->string('car_regno');
            $table->string('car_name');
            $table->string('car_type');
            $table->string('car_price');
            $table->longText('car_features');
            $table->string('exterior_img');
            $table->string('interior_img');
            $table->string('rear_img');
            $table->string('front_img');
            $table->string('car_status');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crms_cars');
    }
}
