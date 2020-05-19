<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RateReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_siswa' => $this->id_siswa,
            'id_guru' => $this->id_guru,
            'id_matpel' => $this->id_matpel,
            'pertanyaan1' => $this->pertanyaan1,
            'pertanyaan2' => $this->pertanyaan2,
            'pertanyaan3' => $this->pertanyaan3,
            'pertanyaan4' => $this->pertanyaan4,
            'pertanyaan5' => $this->pertanyaan5,
            'pertanyaan6' => $this->pertanyaan6,
            'pertanyaan7' => $this->pertanyaan7,
            'pertanyaan8' => $this->pertanyaan8,
            'pertanyaan9' => $this->pertanyaan9,
            'averageRate' => $this->averageRate,
        ];
    }
}
