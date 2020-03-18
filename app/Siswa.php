<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $fillable = ['nama', 'jenisProgram', 'kelas'];

    public function mataPelajarans(){
        return $this->hasMany(MataPelajaran::class);
    }
}
