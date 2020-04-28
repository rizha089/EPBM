<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatpelUser extends Controller
{
    //
    public function index(){
    	$siswa = \App\Siswa::All();

    	// $matpel = \App\MataPelajaran::first();

    	// $siswa->matpel_siswa()->attach($matpel);
    	// $mata = $siswa->matpel_siswa;
    	// dd($siswa);
    	return view('viewcobasinat', ['siswa'=>$siswa]);
    }
}
