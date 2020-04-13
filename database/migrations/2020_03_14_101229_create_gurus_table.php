<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table  ->increments('id');
            $table  ->string('namaGuru');
            $table  ->string('tempatLahir');
            $table  ->date('tanggalLahir');
            $table  ->string('alamat');
            $table  ->string('jenisKelamin');
            $table  ->float('ratings');
            $table  ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
