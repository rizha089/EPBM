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
            $table->string('kode_matpel');
            $table->timestamps();

            $table->foreign('id_guru')->references('id')->on('guru');
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
        Schema::dropIfExists('matpel_guru');
    }
}
