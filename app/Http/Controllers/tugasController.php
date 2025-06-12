<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugasController extends Controller
{
     public function tugas () {
     return view('public.tugas siswa');
    }
}
