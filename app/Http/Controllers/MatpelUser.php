<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Programs;
use App\MatpelSiswa;

class MatpelUser extends Controller
{
    //
    public function index(){
        $mata_pelajaran = \App\MataPelajaran::all();
        $kelas = \App\Siswa::select('kelas')->distinct()->get();
        return view('viewcobasinat', compact('mata_pelajaran', 'kelas'));
    }

    public function tambah(Request $request){
    	// tambah matpel ke tabel mata pelajaran siswa
        $id_matpel = $request->input('tambahMatpel');

        // dd($id_matpel);
        $kelas = $request->kelas;
        $siswa = \App\Siswa::where('kelas', $kelas)->get();
        $guru = \App\MatpelGuru::where('id_matpel', $id_matpel)->get();

        for ($i=0; $i < count($siswa); $i++) { 
            $tambahMatpel = MatpelSiswa::firstOrCreate([        
                'mata_pelajaran_id' => $id_matpel,
                'siswa_id' => $siswa[$i]->id,
            ]); 
        }
        
        for ($i=0; $i < count($siswa); $i++) { 
            for ($j=0; $j < count($guru); $j++) { 
                $program = Programs::FirstOrCreate([
                    'id_guru' => $guru[$j]->guru->id,
                    'id_matpel' => $id_matpel,
                    'id_siswa' => $siswa[$i]->id
                ]);
            }
        }
        
        return back();
    }
}