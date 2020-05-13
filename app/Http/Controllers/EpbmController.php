<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\MataPelajaran;
use App\Guru;
use App\MatpelGuru;
use App\Programs;
use App\MatpelSiswa;
class EpbmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $guru = Guru::all();
        return view('layouts/elements/epbm', ['guru' => $guru]);
    }

    public function isiEPBM(Request $request, $id)
    {
        // $matpel_guru = MatpelGuru::where('id_matpel', $id)->where('filled', 0)->get();

        $id_siswa = Auth::id();
        $matpel_guru = Programs::where('id_matpel', $id)->where('id_siswa', $id_siswa)->where('filled', 0)->get();

        // dd($matpel_guru);
        // print(count($matpel_guru));

        if(count($matpel_guru) == 0){
            $matpel = MatpelSiswa::where('siswa_id', $id_siswa)->where('mata_pelajaran_id', $id)->update(
                ['filled' => 1]
            );
            return redirect()->action('ElementController@index');
        }
        else{
            return view('layouts/elements/epbm', compact('matpel_guru'));
        }
    }
}
