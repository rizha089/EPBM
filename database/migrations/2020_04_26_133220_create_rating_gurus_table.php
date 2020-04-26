<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_guru', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_guru');
            $table->double('rating');
            $table->timestamps();
            
            $table->foreign('id_guru')->references('id')->on('guru');
            $table->foreign('id_siswa')->references('id')->on('siswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating_guru');
    }
}
