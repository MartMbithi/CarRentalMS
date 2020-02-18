<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmsCarPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crms_car_payments', function (Blueprint $table) {
            $table->bigIncrements('p_id')->unique();
            $table->string('c_name');
            $table->string('b_duration');
            $table->string('p_amt');
            $table->string('car_id');
            $table->string('car_cat_id');
            $table->string('car_regno');
            $table->string('car_type');
            $table->string('car_name');
            $table->string('c_id');
            $table->string('a_id');
            $table->string('c_natidno');
            $table->string('p_code');
            $table->string('p_method');
            $table->string('p_ref_number');
            //$table->string('p+')
            $table->timestamp('p_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crms_car_payments');
    }
}
