<?php

namespace App\Http\Controllers;
use App\MataPelajaran;
use App\MatpelSiswa;
use App\MatpelGuru;
use App\Programs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('/home');
    }

    public function getMatpelList()
    {
        //get semua matpel di tabel mata pelajaran
        $mata_pelajaran = MataPelajaran::all();
        
        return view('/layouts/dashboard/tambahMatpel',compact('mata_pelajaran'));
    }

    public function tambahMatpel(Request $request)
    {
        // tambah matpel ke tabel mata pelajaran siswa
        $id_siswa = Auth::user()->id;
        $id_matpel = $request->input('tambahMatpel');

        $tambahMatpel = MatpelSiswa::firstOrCreate([        
            'mata_pelajaran_id' => $id_matpel,
            'siswa_id' => $id_siswa,
        ]);
        
        $guru = \App\MatpelGuru::where('id_matpel', $id_matpel)->get();
        
        for ($j=0; $j < count($guru); $j++) { 
            $program = Programs::FirstOrCreate([
                'id_guru' => $guru[$j]->guru->id,
                'id_matpel' => $id_matpel,
                'id_siswa' => $id_siswa
            ]);
        }
        return back();
    }
}
