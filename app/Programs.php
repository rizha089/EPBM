<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    //
	protected $table = 'programs';

	protected $fillable = [
		'id_guru',
		'id_matpel',
		'id_siswa',
		'filled'
	];

	public function guru(){
		return $this->belongsTo('\App\Guru', 'id_guru', 'id');
	}

	public function mata_pelajaran(){
		return $this->belongsTo('\App\MataPelajaran', 'id_matpel', 'id');
	}

	public function siswa(){
		return $this->belongsTo('\App\Siswa', 'id_siswa', 'id');
	}
}

