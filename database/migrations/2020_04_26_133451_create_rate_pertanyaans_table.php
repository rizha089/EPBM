<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_pertanyaan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_guru');
            $table->string('kode_matpel');
            $table->double('Pertanyaan 1');
            $table->double('Pertanyaan 2');
            $table->double('Pertanyaan 3');
            $table->double('Pertanyaan 4');
            $table->double('Pertanyaan 5');
            $table->double('Rata-rata');
            $table->timestamps();

            $table->foreign('id_guru')->references('id')->on('guru');
            $table->foreign('id_siswa')->references('id')->on('siswa');
            $table->foreign('kode_matpel')->references('kode_matpel')->on('mata_pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_pertanyaan');
    }
}
