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
<<<<<<< HEAD

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
=======
        $rate = RatePertanyaan::get();

        $rate_array[] = array(
            'Nama Siswa', 'Nama Guru', 'Mata Pelajaran', 'Pertanyaan 1', 'Pertanyaan 2','Pertanyaan 3', 'Pertanyaan 4', 'Pertanyaan 5', 'Pertanyaan 6', 'Pertanyaan 7', 'Pertanyaan 8', 'Pertanyaan 9', 'Average'
>>>>>>> 880a7f50a1cbe03982b561e95811280bc1fa878e
        );

        foreach ($rate as $r) {
            $rate_array[] = array(
<<<<<<< HEAD
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
=======
                'Nama_Siswa' => $r->siswa->nama,
                'Nama_Guru' => $r->guru->nama,
                'Mata_Pelajaran' => $r->mata_pelajaran->nama_matpel,
                'Pertanyaan_1' => $r->pertanyaan1,
                'Pertanyaan_2' => $r->pertanyaan2,
                'Pertanyaan_3' => $r->pertanyaan3,
                'Pertanyaan_4' => $r->pertanyaan4,
                'Pertanyaan_5' => $r->pertanyaan5,
                'Pertanyaan_6' => $r->pertanyaan6,
                'Pertanyaan_7' => $r->pertanyaan7,
                'Pertanyaan_8' => $r->pertanyaan8,
                'Pertanyaan_9' => $r->pertanyaan9,
                'Average' => $r->averageRate,
            );
>>>>>>> 880a7f50a1cbe03982b561e95811280bc1fa878e
    }
        dd($rate_array);
        return view('viewcobasinat', compact('rate'));
}
}

