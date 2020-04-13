<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormEpbmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_epbms', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('id_guru');
            $table->UnsignedInteger('id_pertanyaan');
            $table->UnsignedInteger('id_matpel');
            $table->UnsignedInteger('id_siswa');
            $table->float('score');
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
        Schema::dropIfExists('form_epbms');
    }
}
