<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use Notifiable;
    protected $table = "siswa";

    protected $guard = [];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function matpel_siswa(){
        return $this->belongsToMany('App\MataPelajaran');
    }

    public function rate_pertanyaan(){
        return $this->hasMany('App\RatePertanyaan');
    }

    public function programs(){
        return $this->hasMany('App\Programs');
    }
}
