<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KompetisiController extends Controller
{
    public function kompetisi()
    {
        return view('public.kompetisi');
    }
}
