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
            $table->string('token')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nis')->unique();
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('kelas');
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('telepon');
            $table->string('tinggal');
            $table->string('ttl');
            $table->string('kewarganegaraan');
            $table->string('yatim');
            $table->string('alamat');
            $table->string('rt_rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('nomor_kk');
            $table->string('tanggal_gabung');
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
