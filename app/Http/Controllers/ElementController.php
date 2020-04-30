<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\MataPelajaran;
use App\Siswa;

class ElementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::id();
        $siswa = Siswa::find($id);
        // dd($siswa->matpel_siswa);
        $matpelSiswa = $siswa->matpel_siswa()->where('filled', 0)->get();

        return view('layouts/elements/index', [
        	'mata_pelajaran' => $matpelSiswa
        ]);
    }
}
