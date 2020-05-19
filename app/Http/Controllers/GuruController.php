<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RatePertanyaan;
use App\Http\Controllers\Auth;
use App\Rekap;
use App\RekapDatabase;

class GuruController extends Controller
{
    //
    public function index() {
        // Buat Dapetin Pertanyaan
        $pertanyaans_db = DB::table('pertanyaan')->select('list_pertanyaan')->get();
        $pertanyaan = [];
        foreach($pertanyaans_db as $p) {
            array_push($pertanyaan, $p->list_pertanyaan);
        }

        $matpel_db = DB::table('matpel_guru')
                        -> join('mata_pelajaran', 'matpel_guru.id_matpel', '=', 'mata_pelajaran.id')
                        -> select('mata_pelajaran.nama_matpel')
                        -> where('matpel_guru.id_guru', auth()->user()->id)
                        -> get();
        $matpel = [];
        foreach($matpel_db as $m) {
            array_push($matpel, $m->nama_matpel);
        }

        $nilai= array(array(array()));
        // Per Matpel
        for($i = 0; $i < 1; $i++) {
            // Per Pertanyaan
            for($j = 0; $j < 7; $j++){
                $temp = DB::table('rekap')
                            -> join('guru', 'rekap.id_guru', '=', 'guru.id')
                            -> join('mata_pelajaran', 'rekap.id_matpel', '=', 'mata_pelajaran.id')
                            -> join('pertanyaan', 'rekap.id_pertanyaan', '=', 'pertanyaan.id')
                            -> where('rekap.id_guru', auth()->user()->id)
                            -> groupBy('guru.nama', 'mata_pelajaran.nama_matpel', 'pertanyaan.list_pertanyaan', 'nilai')
                            -> select(DB::raw('count(nilai) as count_nilai'))
                            -> where('rekap.id_pertanyaan', $j+1)
                            -> get();

                $temp_nilai = [];
                foreach($temp as $t) {
                    array_push($temp_nilai, $t->count_nilai);
                }
                $nilai[$i][$j][] = $temp_nilai;
            }
        }

        // return json_encode($nilai[0][1][0][0]);
        return view('guruPage2', ['pertanyaan' => $pertanyaan, 'matpel' => $matpel, 'nilai' => $nilai]);
    }
}
