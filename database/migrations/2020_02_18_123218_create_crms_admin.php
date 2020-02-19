<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmsAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crms_admin', function (Blueprint $table) {
            $table->bigIncrements('a_id')->unique();
            $table->string('a_name');
            $table->string('a_number');
            $table->string('a_email');
            $table->string('a_pwd');
            $table->string('a_dpic');
            $table->longText('a_bio');
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
        Schema::dropIfExists('crms_admin');
    }
}
