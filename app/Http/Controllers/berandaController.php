<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function beranda_siswa () {
        return view('public.beranda_siswa');
    }
}
