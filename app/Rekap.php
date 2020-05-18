<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    //
    protected $table = 'rekap';
    protected $fillable = [
        'id_guru',
        'id_matpel',
        'id_pertanyaan',
        'nilai'
    ];

    public function guru() {
        return $this->belongsTo('App\Guru');
    }

    public function mata_pelajaran() {
        return $this->belongsTo('App\MataPelajaran');
    }

    public function pertanyaan() {
        return $this->belongsTo('App\Pertanyaan');
    }
}
