<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kompetisiController extends Controller
{
    public function kompetisi () {
     return view('public.kompetisi');
    }
}
