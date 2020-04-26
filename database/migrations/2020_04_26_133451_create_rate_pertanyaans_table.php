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
            $table->double('pertanyaan1');
            $table->double('pertanyaan2');
            $table->double('pertanyaan3');
            $table->double('pertanyaan4');
            $table->double('pertanyaan5');
            $table->double('averageRate');
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
