<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = "siswa";

    protected $fillable = ['nis', 'email', 'nama', 'kelas'];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function matpel_siswas(){
        return $this->belongsToMany('App\MataPelajaran');
    }
}
