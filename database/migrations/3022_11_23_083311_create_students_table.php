<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id_students');
            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('bill_id');
            $table->char('nis')->unique();
            $table->string('gender');
            $table->char('address');
            $table->date('dob');
            $table->string('no_hp_guardian');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
