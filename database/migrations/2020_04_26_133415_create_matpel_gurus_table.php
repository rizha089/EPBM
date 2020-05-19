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
            $table->string('kode');
            $table->unsignedBigInteger('id_guru');
            $table->unsignedBigInteger('id_matpel');
            $table->Integer('filled')->default(0);

            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('cascade');
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
        Schema::dropIfExists('matpel_guru');
    }
}
