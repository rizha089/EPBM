<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RatePertanyaan;

class GuruController extends Controller
{
    //
    public function index() {
        $rekap = DB::table('rekap')
                    ->join('guru', 'rekap.id_guru', '=', 'guru.id')
                    ->join('mata_pelajaran', 'rekap.id_matpel', '=', 'mata_pelajaran.id')
                    ->join('pertanyaan', 'rekap.id_pertanyaan', '=', 'pertanyaan.id')
                    ->where('rekap.id_guru', '1')
                    ->select('guru.nama as nama_guru', 'mata_pelajaran.nama_matpel as nama_matpel', 'pertanyaan.list_pertanyaan as pertanyaan', 'nilai', DB::raw('count(nilai) as count_nilai'))
                    ->groupBy('nama_guru', 'nama_matpel', 'pertanyaan', 'nilai')
                    ->get();
        // $pertanyaan = DB::table('pertanyaan')->get();
        // return $rekap->toJson(JSON_PRETTY_PRINT);
        // echo ;
        return view('guruPage', ['rekap' => $rekap]);
    }
}
