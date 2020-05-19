<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use Notifiable;
    protected $table = "siswa";
    public $timestamps = false;

    protected $fillable = [
        'nis',
        'email',
        'nama',
        'kelas',
        'password',
        'token',
        'nisn',
        'nik',
        'nama_panggilan',
        'jenis_kelamin',
        'agama',
        'telepon',
        'tinggal',
        'ttl',
        'kewarganegaraan',
        'yatim',
        'alamat',
        'rt_rw',
        'kelurahan',
        'kecamatan',
        'kota',
        'nomor_kk',
        'tanggal_gabung',
        'asal_sekolah',
    ];

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
