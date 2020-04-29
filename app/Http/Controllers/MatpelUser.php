<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatpelUser extends Controller
{
    //
    public function index(){
    	$siswa = \App\Siswa::find(1);
    	return view('viewcobasinat', [
    		'siswa' => $siswa
    	]);
    }
}
