<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    protected $table = "guru";

    protected $fillable = [
        'nip',
        'email',
        'nama',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function matpel_gurus(){
        return $this->belongsToMany('App\MataPelajaran');
    }

    public function rate_pertanyaans(){
        return $this->hasMany('App\RatePertanyaan');
    }
}
