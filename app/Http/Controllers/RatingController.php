<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\RatePertanyaanResource as RateResource;
use Illuminate\Http\Request;

use App\RatePertanyaan;
class RatingController extends Controller
{
    //
    public function setRating(Request $request){
        $rate = RatePertanyaan::create([
            'id_siswa' => $request->id_siswa,
            'id_guru' => $request->id_guru,
            'kode_matpel' => $request->kode_matpel,
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
        
        return new RateResource($rate);
    }
}
