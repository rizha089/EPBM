<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataPelajaran;
use App\Guru;
use App\MatpelGuru;
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
        $matpel_guru = MatpelGuru::where('id_matpel', $id)->get();
        return view('layouts/elements/epbm', compact('matpel_guru'));
    }
}
