<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RatePertanyaan;

class MatpelUser extends Controller
{
    public function index(){
        // Login si Pak Auzi
        $id_guru = 1;
        $id_matpel = 1;

        $rate = RatePertanyaan::where('id_guru', $id_guru)->where('id_matpel', $id_matpel)->get();        
        
        $rate_array[] = array(
            'Nama guru', 'Nama Matpel', 
            'pertanyaan1', 
            'pertanyaan2',
            'pertanyaan3',
            'pertanyaan4',
            'pertanyaan5',
            'pertanyaan6',
            'pertanyaan7',
            'avg Rate'
        );

        foreach ($rate as $r) {
            $rate_array[] = array(
                'Nama guru' => $r->guru->nama,
                'Nama Matpel' => $r->mata_pelajaran->nama_matpel,
                'pertanyaan1' => $r->avg('pertanyaan1'),
                'pertanyaan2' => $r->avg('pertanyaan2'),
                'pertanyaan3' => $r->avg('pertanyaan3'),
                'pertanyaan4' => $r->avg('pertanyaan4'),
                'pertanyaan5' => $r->avg('pertanyaan5'),
                'pertanyaan6' => $r->avg('pertanyaan6'),
                'pertanyaan7' => $r->avg('pertanyaan7'),
                'avg Rate' => $r->avg('averageRate')
            );
        }

        dd($rate_array);
        return view('viewcobasinat', compact('rate'));
    }
}