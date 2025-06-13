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
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\LoginPageMiddleware;
use App\Http\Middleware\SiswaMiddleware;
use App\Models\PengumpulanTugas;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return redirect("/login");
// });


Route::middleware(LoginPageMiddleware::class)->group(function () {
    // auth
    // admin (guard admin)
    Route::get('/admin-login', [LoginController::class, 'loginAdminView'])->name('login.admin');
    Route::post('/admin-login', [LoginController::class, 'loginAdmin'])->name('login.admin.action');

    // user (guard web)
    Route::get('/login', [LoginController::class, 'loginView'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.action');
});

Route::post('/admin-logout', [LoginController::class, 'logoutAdmin'])->name('logout.admin.action');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.action');


Route::middleware(SiswaMiddleware::class)->group(function () {
    // SISWA
    Route::get('/', [PagesController::class, 'beranda'])->name('siswa.beranda');
    Route::get('/kompetisi', [PagesController::class, 'kompetisi'])->name('siswa.kompetisi');
    Route::get('/materi-siswa', [PagesController::class, 'materi'])->name('siswa.materi');
    Route::get('/materi-siswa/{id}', [PagesController::class, 'materiById'])->name('siswa.materi.id');
    Route::get('/tugas-siswa', [PagesController::class, 'tugas'])->name('siswa.tugas');
    Route::get('/tugas-siswa/{id}', [PagesController::class, 'tugasById'])->name('siswa.tugas.id');
    Route::post('/tugas-siswa/kumpulin/{id}', [PengumpulanController::class, 'store'])->name('siswa.tugas.kumpulin');
    Route::get('/tentang-apk-siswa', [PagesController::class, 'tentang'])->name('siswa.tentang');
});

// auth testing
// Route::get('/auth', [PagesController::class, 'authTest'])->name('siswa.auth.test');


Route::middleware(AdminMiddleware::class)->group(function () {
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
    Route::get('/tentang-apk', [TentangController::class, 'tentang_aplikasi'])->name('tentang_aplikasi.index');

    // pengumpulan tugas
    Route::get('/pengumpulan-tugas', [PengumpulanController::class, 'index'])->name('pengumpulan_tugas.index');
    Route::get('/pengumpulan-tugas/edit/{id}', [PengumpulanController::class, 'edit'])->name('pengumpulan_tugas.edit');
    Route::put('/pengumpulan-tugas/nilai/{id}', [PengumpulanController::class, 'update'])->name('pengumpulan_tugas.nilai');
    Route::delete('/pengumpulan-tugas/delete/{id}', [PengumpulanController::class, 'delete'])->name('pengumpulan_tugas.delete');
});
