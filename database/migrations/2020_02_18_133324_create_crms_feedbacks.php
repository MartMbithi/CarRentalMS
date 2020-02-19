<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmsFeedbacks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crms_feedbacks', function (Blueprint $table) {
            $table->bigIncrements('f_id')->unique();
            $table->string('user_name');
            $table->string('user_number');
            $table->longText('feedback');
            $table->string('f_status');
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
        Schema::dropIfExists('crms_feedbacks');
    }
}
