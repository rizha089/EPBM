<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatpelSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajaran_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mata_pelajaran_id');
            $table->unsignedBigInteger('id_siswa');
            $table->boolean('filled')->default(0)->change();
            $table->timestamps();

            // $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('cascade');
            // $table->foreign('kode_matpel')->references('kode_matpel')->on('mata_pelajaran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_pelajaran_siswa');
    }
}
