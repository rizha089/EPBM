<?php

namespace App\Http\Controllers;

use App\Exports\RateExports;

use App\Http\Controllers\Controller;
// use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\RateReportResource as RRSource;
use Illuminate\Http\Request;

use App\Programs;
use App\RatePertanyaan;
use Excel;

class RatingController extends Controller
{
    //
    public function setRating(Request $request){
        $rate = RatePertanyaan::firstOrCreate([
            'id_siswa' => $request->id_siswa,
            'id_guru' => $request->id_guru,
            'id_matpel' => $request->id_matpel,
            'pertanyaan1' => $request->pertanyaan1,
            'pertanyaan2' => $request->pertanyaan2,
            'pertanyaan3' => $request->pertanyaan3,
            'pertanyaan4' => $request->pertanyaan4,
            'pertanyaan5' => $request->pertanyaan5,
            'pertanyaan6' => $request->pertanyaan6,
            'pertanyaan7' => $request->pertanyaan7,
            'pertanyaan8' => $request->pertanyaan8,
            'pertanyaan9' => $request->pertanyaan9,
            'averageRate' => (
                $request->pertanyaan1 + $request->pertanyaan2 +
                $request->pertanyaan3 + $request->pertanyaan4 + $request->pertanyaan5 + $request->pertanyaan6 + $request->pertanyaan7
            ) / 7
        ]);

        $matpelFilled = Programs::where('id_matpel', $request->id_matpel)->where('id_siswa', $request->id_siswa)->where('id_guru', $request->id_guru)->update(['filled' => 1]);

        return back();
    }

    public function index(){
        $rate = RatePertanyaan::get();

        return view(
            'export', compact('rate')
        );
    }

    public function export_excel(){
        return Excel::download(new RateExports, 'rate.csv');
    }
}