<?php

namespace App\Exports;

use App\RatePertanyaan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;

class RateExports implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
    	$rate = RatePertanyaan::get();

        $rate_array[] = array(
            'Nama Siswa', 'Nama Guru', 'Mata Pelajaran', 'Pertanyaan 1', 'Pertanyaan 2','Pertanyaan 3', 'Pertanyaan 4', 'Pertanyaan 5', 'Pertanyaan 6', 'Pertanyaan 7', 'Pertanyaan 8', 'Pertanyaan 9', 'Average'
        );
        
        foreach ($rate as $r) {
            $rate_array[] = array(
                'Nama Siswa' => $r->siswa->nama, 
                'Nama Guru' => $r->guru->nama, 
                'Mata Pelajaran' => $r->mata_pelajaran->nama_matpel, 
                'Pertanyaan 1' => $r->pertanyaan1, 
                'Pertanyaan 2' => $r->pertanyaan2,
                'Pertanyaan 3' => $r->pertanyaan3, 
                'Pertanyaan 4' => $r->pertanyaan4, 
                'Pertanyaan 5' => $r->pertanyaan5, 
                'Pertanyaan 6' => $r->pertanyaan6, 
                'Pertanyaan 7' => $r->pertanyaan7, 
                'Pertanyaan 8' => $r->pertanyaan8, 
                'Pertanyaan 9' => $r->pertanyaan9, 
                'Average' => $r->averageRate,
            );
        }

    	return $rate_array;
    }
}
