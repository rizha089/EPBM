<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Programs;

class MatpelUser extends Controller
{
    //
    public function index(){
    	$siswa = \App\Siswa::where('kelas', 12)->get();
    	$matpel = \App\MataPelajaran::where('kode_matpel', 'MTK1')->first();
    	$guru = \App\MatpelGuru::where('id_matpel', $matpel->id)->get();
    	
    	$program = Programs::FirstOrCreate([
    		
    	]);
    	

    	// return view('viewcobasinat', compact('siswa'));	
    }
}
