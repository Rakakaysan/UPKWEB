<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriSiswaController extends Controller
{
    public function materi() {
        return view('public.materi siswa');
    }
}

