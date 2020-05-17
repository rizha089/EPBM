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
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        'pertanyaan8',
        'pertanyaan9',
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
