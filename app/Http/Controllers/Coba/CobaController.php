<?php

namespace App\Http\Controllers\Coba;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function coba(){
        $nama = "Yoki Jati Perkasa";
        $data = ['namaGw' => $nama];
        return view('coba.halo', $data);
    }
}
