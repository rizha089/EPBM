<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatpelGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matpel_guru', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_guru');
            $table->Integer('id_matpel') -> unsigned();
            $table->timestamps();

            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('cascade');
<<<<<<< HEAD
            $table->foreign('id_matpel')->references('id')->on('mata_pelajaran')->onDelete('cascade');
=======
            $table->foreign('kode_matpel')->references('kode_matpel')->on('mata_pelajaran')->onDelete('cascade');
>>>>>>> ab2d43abc714e2542d77adc6355bdcd21f8d101c
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matpel_guru');
    }
}
