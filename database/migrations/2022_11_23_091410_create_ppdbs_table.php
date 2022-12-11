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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->bigIncrements('id_ppdbs');
            $table->integer('nisn');
            $table->string('long_name');
            $table->string('origin_school');
            $table->string('email')->unique();
            $table->string('place');
            $table->date('dob');
            $table->year('year_graduated');
            $table->string('gender');
            $table->string('no_hp');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('address');
            $table->string('no_hp_guardian');
            $table->string('avatar');
            $table->string('path');
            $table->unsignedBigInteger('id_status')->nullable();
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
        Schema::dropIfExists('ppdbs');
    }
};
