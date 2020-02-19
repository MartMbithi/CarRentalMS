<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmsStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crms_staff', function (Blueprint $table) {
            $table->bigIncrements('s_id')->unique();
            $table->string('s_name');
            $table->string('s_natidno');
            $table->string('s_phone');
            $table->string('s_adr');
            $table->string('s_no');
            $table->string('s_email');
            $table->string('s_pwd');
            $table->string('s_dpic');
            $table->longText('s_bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crms_staff');
    }
}
