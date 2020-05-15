<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    //
    protected $table = "mata_pelajaran";
    protected $fillable = ['kode_matpel','nama_matpel'];
    // protected $primaryKey = 'kode_matpel';

    public function siswa(){
        return $this->belongsToMany('App\Siswa');
    }

    public function guru(){
        return $this->belongsToMany('App\Guru');
    }

    public function rate_pertanyaan(){
        return $this->hasMany('App\RatePertanyaan');
    }

    public function programs(){
        return $this->hasMany('App\Programs');
    }
}
