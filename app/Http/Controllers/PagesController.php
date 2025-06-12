<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function siswaBeranda()
    {
        return view('public.beranda_siswa');
    }

    public function siswaKompetisi()
    {
        return view('public.kompetisi');
    }

    public function siswaTugas()
    {
        return view('public.tugas_siswa');
    }
}
