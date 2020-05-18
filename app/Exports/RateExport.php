<?php

namespace App\Exports;

use App\RatePertanyaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class RateExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RatePertanyaan::all();
    }
}
