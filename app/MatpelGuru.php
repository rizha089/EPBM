<?php

namespace App;
use App\Guru;

use Illuminate\Database\Eloquent\Model;

class MatpelGuru extends Model
{
    protected $table = "matpel_guru";

    protected $fillable = [
        'id_guru',
        'kode_matpel',    
    ];

    public function guru(){
        return $this->belongsToMany('App\Guru');
    }
}
