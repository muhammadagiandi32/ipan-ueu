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
            $table->bigInteger('id_mapel');
            $table->bigInteger('kelas_id');
            $table->bigInteger('teacher_id');
            $table->bigInteger('materi_id');
            $table->string('mapel_name');
            $table->string('day');
            $table->dateTime('schedule');
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
        Schema::dropIfExists('mapels');
    }
};
