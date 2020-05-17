<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('nis')->unique();
            $table->unsignedBigInteger('nisn')->unique();
            $table->unsignedBigInteger('nik')->unique();
            $table->string('kelas');
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->unsignedBigInteger('telepon');
            $table->string('tinggal');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kewarganegaraan');
            $table->string('yatim');
            $table->string('alamat');
            $table->string('rt_rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->unsignedBigInteger('nomor_kk');
            $table->date('tanggal_gabung');
            $table->string('asal_sekolah');
            $table->rememberToken();
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
        Schema::dropIfExists('siswa');
    }
}
