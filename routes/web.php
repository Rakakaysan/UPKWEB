<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboardAdmin', [DashboardController::class, 'dashboard_admin'])->name('dashboard_admin');