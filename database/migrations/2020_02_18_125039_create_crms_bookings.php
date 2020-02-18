<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmsBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crms_bookings', function (Blueprint $table) {
            $table->bigIncrements('b_id')->unique();
            $table->timestamp('b_date');
            $table->string('b_status');
            $table->integer('c_id');
            $table->integer('a_id');
            $table->integer('cc_id');
            $table->integer('s_id');
            $table->integer('car_id');
            $table->string('car_name');
            $table->string('car_type');
            $table->string('car_regno');
            $table->string('b_duration');
            $table->string('car_price');
            $table->string('c_name');
            $table->string('c_natidno');
            $table->string('c_phone');
            $table->string('b_number');
            $table->string('b_car_return_status');
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
        Schema::dropIfExists('crms_bookings');
    }
}
