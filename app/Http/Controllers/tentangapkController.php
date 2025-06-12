<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tentangapkController extends Controller
{
    public function tentang_aplikasiSiswa () {
     return view('public.tentang_aplikasiSiswa');
    }
}
