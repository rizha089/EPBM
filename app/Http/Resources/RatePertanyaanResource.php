<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatePertanyaanResource extends JsonResource
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
            'kode_matpel' => $this->kode_matpel,
            'pertanyaan1' => $this->pertanyaan1,
            'pertanyaan2' => $this->pertanyaan2,
            'pertanyaan3' => $this->pertanyaan3,
            'pertanyaan4' => $this->pertanyaan4,
            'pertanyaan5' => $this->pertanyaan5,
            'averageRate' => $this->averageRate,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
