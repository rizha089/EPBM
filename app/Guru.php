<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    use Notifiable;
    protected $table = "guru";
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nip',
        'email',
        'password'
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

    public function programs(){
        return $this->hasMany('App\Programs');
    }
}
