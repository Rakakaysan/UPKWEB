<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_admin()
    {
        return view('Admin.dashboard');
    }
    public function mencoba()
    {
        return view('beranda');
    }
}
