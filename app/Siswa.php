<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use Notifiable;
    protected $guard = 'siswa';

    protected $table = "siswa";

    protected $fillable = [
        'nis', 'email', 'nama', 'kelas', 'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function matpel_siswa(){
        return $this->belongsToMany('App\MataPelajaran')->withPivot('filled', 0);
    }

    public function rate_pertanyaan(){
        return $this->hasMany('App\RatePertanyaan');
    }
}
