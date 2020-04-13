<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;


class SiswaController extends Controller
{
    public function siswas(Siswa $siswa){
        $siswas = $siswa -> all();
        return response()->json($siswas);
    }
}
