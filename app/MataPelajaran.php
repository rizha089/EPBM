<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    //
    protected $fillable = ['namaMatpel'];

    public function siswas(){
        return $this->belongsToMany(Siswa::class);
    }

    public function gurus(){
        return $this->belongsToMany(Guru::class);
    }
}
