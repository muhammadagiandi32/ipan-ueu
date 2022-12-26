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
        Schema::create('mapels', function (Blueprint $table) {
            $table->bigIncrements('id_mapel');
            $table->unsignedBigInteger('kelas_id');
            $table->bigInteger('teacher_id');
            $table->unsignedBigInteger('materi_id');
            $table->string('mapel_name');
            $table->string('day');
            $table->dateTime('schedule');
            $table->timestamps();

            $table->foreign('materi_id')->references('id_materi')->on('materis');
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas');

            // $table->foreign('materi_id')->references('id_materi')->on('materis')->onDelete('cascade');

            // $table->references('id_mapel')->foreign('mapel_id')->on('materis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapels');
    }
};
