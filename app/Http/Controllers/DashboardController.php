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
        //tambah matpel ke tabel mata pelajaran siswa
        $tambahMatpel = MatpelSiswa::firstOrCreate([        
            'mata_pelajaran_id' => $request->input('tambahMatpel'),
            'siswa_id' => Auth::user()->id,

        ]);
        
        
        // $tambahProgram = Programs::firstOrCreate([
        //     'id_guru' => MatpelGuru::where('id_matpel', $request->input('tambahMatpel'))->get(),
        //     'id_matpel' => $request->input('tambahMatpel'),
        //     'id_siswa' => Auth::user()->id,

        // ]);
        
        return back();
    }
}
