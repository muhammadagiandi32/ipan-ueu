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
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id_bill');
            $table->unsignedBigInteger('students_id');
            $table->date('month_bill');
            $table->decimal('total', $precision = 8, $scale = 2);
            $table->unsignedBigInteger('paymant_id')->nullable();
            $table->timestamps();

            $table->foreign('students_id')->references('id_students')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
};
