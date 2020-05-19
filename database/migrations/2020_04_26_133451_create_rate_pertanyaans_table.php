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
            $table->unsignedBigInteger('id_matpel');
            $table->double('pertanyaan1');
            $table->double('pertanyaan2');
            $table->double('pertanyaan3');
            $table->double('pertanyaan4');
            $table->double('pertanyaan5');
            $table->double('pertanyaan6');
            $table->double('pertanyaan7');
            $table->string('pertanyaan8')->nullable();
            $table->string('pertanyaan9')->nullable();
            $table->double('averageRate');
            $table->timestamps();

            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('cascade');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('id_matpel')->references('id')->on('mata_pelajaran')->onDelete('cascade');
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
