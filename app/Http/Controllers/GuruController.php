<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function gurus(Guru $guru){
        $gurus = $guru -> all();
        return response()->json($gurus);
}
}