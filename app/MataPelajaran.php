<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    //
    protected $table = "mata_pelajaran";
    protected $fillable = ['kode_matpel','nama_matpel'];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'kode_matpel';

    public function siswa(){
        return $this->belongsToMany('App\Siswa');
    }

    public function guru(){
        return $this->belongsToMany('App\Guru');
    }

    public function rate_pertanyaans(){
        return $this->hasMany('App\RatePertanyaan');
    }
}
