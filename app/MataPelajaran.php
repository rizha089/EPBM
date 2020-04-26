<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    //
    protected $table = "mata_pelajaran";

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'kode_matpel';

    public function siswa(){
        return $this->belongsToMany('App\Siswa');
    }

    public function guru(){
        return $this->belongsToMany('App\Guru');
    }
}
