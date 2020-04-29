<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatpelSiswa extends Model
{
    //
	protected $table = 'mata_pelajaran_siswa';

    protected $fillable = [
        'siswa_id',
        'mata_pelajaran_id',
        'filled'
    ];
}
