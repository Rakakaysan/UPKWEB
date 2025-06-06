<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('public.login');
});

Route::get('/dashboardAdmin', [DashboardController::class, 'dashboard_admin'])->name('dashboard_admin');
Route::get('/dashboard', function () {
    return view('public.dashboard');
})->name('dashboard_siswa');

Route::get('/kompetensi-tujuan', function () {
    return view('public.kompetensi-tujuan');
})->name('kompetensi.tujuan');
Route::get('/materi-candi', function () {
    Route::prefix('public/materi')->middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('public.materi.materi');
        })->name('siswa.materi');
    
        Route::get('/pengertian', function () {
            return view('public.materi.pengertian');
        })->name('siswa.materi.pengertian');
    
        Route::get('/ciri-ciri', function () {
            return view('public.materi.ciri-ciri');
        })->name('siswa.materi.ciri');
    
        Route::get('/jenis', function () {
            return view('public.materi.jenis');
        })->name('siswa.materi.jenis');
    
        Route::get('/fungsi', function () {
            return view('public.materi.fungsi');
        })->name('siswa.materi.fungsi');
    
        Route::get('/contoh', function () {
            return view('public.materi.contoh');
        })->name('siswa.materi.contoh');
    });

Route::get('/siswa/tugas', function () {
    return view('public.tugas');
})->name('siswa.tugas');
Route::get('/tentang', function () {
    return view('public.tentang');
})->name('tentang');


    
}