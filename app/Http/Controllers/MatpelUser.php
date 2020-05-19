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
        $rate = RatePertanyaan::firstWhere('id_guru', $id_guru);
        return view('viewcobasinat', compact('rate'));
    }
}