<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    protected $fillable = ['namaGuru'];

    public function mataPelajarans(){
        return $this->hasMany(MataPelajaran::class);
    }
}
