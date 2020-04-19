<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table  ->increments('id');
            $table  ->string('nama');
            $table  ->string('tempatLahir');
            $table  ->date('tanggalLahir');
            $table  ->string('alamat');
            $table  ->string('jenisKelamin');
            $table  ->string('jenisProgram');
            $table  ->string('kelas');
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
        Schema::dropIfExists('siswas');
    }
}
