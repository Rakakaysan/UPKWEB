<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KompetisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MateriSiswaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PengumpulanController;
use App\Http\Controllers\TentangApkController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\tugaspembelajaranController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return redirect("/login");
// });


// Route::get('/kompetensi-tujuan', [KompetisiController::class, 'kompetisi'])->name('kompetisi');
// Route::get('/materi-siswa', [MateriSiswaController::class, 'materi'])->name('materi');
// Route::get('/tentang-aplikasi', [TentangApkController::class, 'tentang_aplikasiSiswa'])->name('tentang_aplikasiSiswa');
// Route::get('/beranda-siswa', [BerandaController::class, 'beranda_siswa'])->name('beranda_siswa');
// Route::get('/create-pengumpulan-tugas', [PengumpulanController::class, 'CreatePengumpulanTugas'])->name('CreatePengumpulanTugas');
// Route::resource('tugas', TugasController::class);
// Route::resource('materi', MateriController::class);


// auth
Route::get('/login', [LoginController::class, 'loginView'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.action');


// SISWA

Route::get('/', [PagesController::class, 'siswaBeranda'])->name('siswaBeranda');
Route::get('/kompetisi', [PagesController::class, 'siswaKompetisi'])->name('siswaKompetisi');
Route::get('/tugas-siswa', [PagesController::class, 'siswaTugas'])->name('siswaTugas');



// ADMIN


// manajemen
Route::get('/manajemen-pengguna', [ManajemenController::class, 'index'])->name('manajemen_pengguna.index');
Route::get('/manajemen-pengguna/create', [ManajemenController::class, 'create'])->name('manajemen_pengguna.create');
Route::get('/manajemen-pengguna/edit/{id}', [ManajemenController::class, 'edit'])->name('manajemen_pengguna.edit');
Route::post('/manajemen-pengguna/store', [ManajemenController::class, 'store'])->name('manajemen_pengguna.store');
Route::put('/manajemen-pengguna/update/{id}', [ManajemenController::class, 'update'])->name('manajemen_pengguna.update');
Route::delete('/manajmenen-pengguna/delete/{id}', [ManajemenController::class, 'delete'])->name('manajemen_pengguna.delete');

// materi
Route::get('/materi-pembelajaran', [MateriController::class, 'index'])->name('materi_pembelajaran.index');
Route::get('/materi-pembelajaran/create', [MateriController::class, 'create'])->name('materi_pembelajaran.create');
Route::get('/materi-pembelajaran/edit/{id}', [MateriController::class, 'edit'])->name('materi_pembelajaran.edit');
Route::post('/materi-pembelajaran/store', [MateriController::class, 'store'])->name('materi_pembelajaran.store');
Route::put('/materi-pembelajaran/update/{id}', [MateriController::class, 'update'])->name('materi_pembelajaran.update');
Route::delete('/materi-pembelajaran/delete/{id}', [MateriController::class, 'delete'])->name('materi_pembelajaran.delete');

// tugas
Route::get('/tugas', [TugasController::class, 'index'])->name('tugas.index');
Route::get('/tugas/create', [TugasController::class, 'create'])->name('tugas.create');
Route::get('/tugas/edit/{id}', [TugasController::class, 'edit'])->name('tugas.edit');
Route::post('/tugas/store', [TugasController::class, 'store'])->name('tugas.store');
Route::put('/tugas/update/{id}', [TugasController::class, 'update'])->name('tugas.update');
Route::delete('/tugas/delete/{id}', [TugasController::class, 'delete'])->name('tugas.delete');

// tentang apk
Route::get('/tentang-apk', [TentangController::class, 'tentang_aplikasi'])->name('tentang_aplikasi');

// pengumpulan tugas
Route::get('/pengumpulan-tugas', [PengumpulanController::class, 'pengumpulan_tugas'])->name('pengumpulan_tugas');
