<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RatePertanyaanResource as RateResource;
use Illuminate\Http\Request;
use App\Programs;
use App\RatePertanyaan;


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
            'averageRate' => (
                $request->pertanyaan1 + $request->pertanyaan2 + 
                $request->pertanyaan3 + $request->pertanyaan4 + $request->pertanyaan5
            ) / 5
        ]);

        $matpelFilled = Programs::where('id_matpel', $request->id_matpel)->where('id_siswa', $request->id_siswa)->where('id_guru', $request->id_guru)->update(['filled' => 1]);

        // dd($matpelFilled);
        return redirect()->back();
    }
}
