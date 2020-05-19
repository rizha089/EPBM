<?php

namespace App\Exports;

use App\RatePertanyaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RateExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function query()
    {
        return RatePertanyaan::query();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Id_siswa',
            'Id_guru',
            'Id_matpel',
            'Soal 1',
            'Soal 2',
            'Soal 3',
            'Soal 4',
            'Soal 5',
            'Soal 6',
            'Soal 7',
            'Soal 8',
            'Soal 9',
            'Rata-rata nilai',
            'Waktu dibuat',
            'Waktu diupdate',
        ];
    }

}