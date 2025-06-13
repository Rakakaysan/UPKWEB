<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
     public function tentang_aplikasi () {
     return view('admin.tentang_aplikasi');
    }
}
