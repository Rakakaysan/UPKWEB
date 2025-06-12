<?php

use App\Http\Controllers\berandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\kompetisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\manajemenController;
use App\Http\Controllers\materiController;
use App\Http\Controllers\materisiswaController;
use App\Http\Controllers\pengumpulanController;
use App\Http\Controllers\tentangapkController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\tugasController;
use App\Http\Controllers\tugaspembelajaranController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboardAdmin', [DashboardController::class, 'dashboard_admin'])->name('dashboard_admin');
Route::get('/manajemenPengguna', [manajemenController::class, 'manajemen_pengguna'])->name('manajemen_pengguna');
Route::get('/materiPembelajaran', [materiController::class, 'materi_pembelajaran'])->name('materi_pembelajaran');
Route::get('/pengumpulanTugas', [pengumpulanController::class, 'pengumpulan_tugas'])->name('pengumpulan_tugas');
Route::get('/tentangApk', [tentangController::class, 'tentang_aplikasi'])->name('tentang_aplikasi');
Route::get('/kompetensiTujuan', [kompetisiController::class, 'kompetisi'])->name('kompetisi');
Route::get('/materiSiswa', [materisiswaController::class, 'materi'])->name('materi');
Route::get('/tentangAplikasi', [tentangapkController::class, 'tentang_aplikasiSiswa'])->name('tentang_aplikasiSiswa');
Route::get('/tugas', [tugasController::class, 'tugas'])->name('tugas');
Route::get('/berandaSiswa', [berandaController::class, 'beranda_siswa'])->name('beranda_siswa');
Route::get('/manajemen-pengguna', [manajemenController::class, 'CreateManajemenPengguna'])->name('CreateManajemenPengguna');
Route::get('/CreateMateriPembelajaran', [materiController::class, 'CreateMateriPembelajaran'])->name('CreateMateriPembelajaran');
Route::get('/CreatePengumpulanTugas', [pengumpulanController::class, 'CreatePengumpulanTugas'])->name('CreatePengumpulanTugas');
Route::resource('tugas', TugasController::class);
Route::resource('materi', MateriController::class);



//Menajemen Pengguna Admin
Route::post('/manajemen-pengguna/create', [manajemenController::class, 'create'])->name('create');
Route::delete('/manajmenen-pengguna/{id}', [manajemenController::class, 'delete'])->name('delete');
// Route untuk edit pengguna
Route::get('/manajemen-pengguna/{id}', [manajemenController::class, 'edit'])->name('edit');
Route::put('/manajemen-pengguna/update/{id}', [manajemenController::class, 'update'])->name('manajemen-pengguna.update');
Route::get('/materi/edit/{id}', [MateriController::class, 'edit'])->name('materi.edit');


Route::post('/materi-pembelajaran/create', [materiController::class, 'store'])->name('materi.store2');
Route::put('/materi-pembelajaran/edit2/{id}', [materiController::class, 'update'])->name('materi.edit2');
Route::delete('/materi-pembelajaran/delete/{id}', [materiController::class, 'delete'])->name('materi.delete2');
