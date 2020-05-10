<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\MataPelajaran;
use App\Siswa;
use App\MatpelSiswa;

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


        // $matpelSiswa = $siswa->matpel_siswa()->get();
        $matpelSiswafilled = $siswa->matpel_siswa()->where('filled', 1)->get();
        $matpelSiswaunfilled = $siswa->matpel_siswa()->where('filled', 0)->get();

        // dd(compact($matpelSiswa));
        return view('layouts/elements/index', [
        	'mata_pelajaran_filled' => $matpelSiswafilled,
            'mata_pelajaran_unfilled' => $matpelSiswaunfilled
        ]);
    }
}
