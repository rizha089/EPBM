<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RatePertanyaan extends Model
{
    //
    protected $table = 'rate_pertanyaan';
    protected $fillable = [
        'id_siswa',
        'id_guru',
        'id_matpel',
        'pertanyaan1',
        'pertanyaan2',
        'pertanyaan3',
        'pertanyaan4',
        'pertanyaan5',
        'averageRate',
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa');
    }

    public function guru(){
        return $this->belongsTo('App\Guru');
    }

    public function mata_pelajaran(){
        return $this->belongsTo('App\MataPelajaran');
    }
}
