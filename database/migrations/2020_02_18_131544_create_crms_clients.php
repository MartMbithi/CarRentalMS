<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmsClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crms_clients', function (Blueprint $table) {
            $table->bigIncrements('c_id')->unique();
            $table->string('c_name');
            $table->string('c_natidno');
            $table->string('c_phone');
            $table->string('c_dob');
            $table->string('c_adr');
            $table->string('c_email');
            $table->string('c_pwd');
            $table->string('c_number');
            $table->longText('c_bio');
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
        Schema::dropIfExists('crms_clients');
    }
}
