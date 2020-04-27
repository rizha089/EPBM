<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataPelajaran;
use App\Guru;

class EpbmController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $guru = Guru::all();
        return view('layouts/elements/epbm', ['guru' => $guru]);
    }

    public function isiEPBM(Request $request, $id)
    {
        $mata_pelajaran = MataPelajaran::where('id', $id)->first();
        return view('layouts/elements/epbm', compact('mata_pelajaran'));
    }
}
