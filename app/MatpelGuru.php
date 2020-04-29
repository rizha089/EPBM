<?php

namespace App;
use App\Guru;

use Illuminate\Database\Eloquent\Model;

class MatpelGuru extends Model
{
    protected $table = "matpel_guru";

    protected $fillable = [
        'id_guru',
        'id_matpel',
        'filled'
    ];

    public function guru(){
        return $this->belongsTo('App\Guru','id_guru', 'id');
    }

    public function matpel(){
        return $this->belongsTo('App\MataPelajaran','id_matpel', 'id');
    }
}
