<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('siswa.login');
});
Route::post('/login', [AuthController::class, 'login']);

// Layout Siswa
Route::get('/dashboard', function () {
    return view('siswa.dashboard');
});
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/jadwal', function () {
    return view('siswa.jadwal');
});

Route::get('/presensi', function () {
    return view('siswa.presensi');
});

Route::get('/akun', function () {
    return view('siswa.akun');
});

Route::get('/suratizin', function () {
    return view('siswa.suratizin');
});

Route::get('/login', function () {
    return view('siswa.login');
});

// Layout Guru
Route::get('/guru/login', function () {
    return view('guru.login');
});

Route::get('/guru/dashboard', function () {
    return view('guru.dashboard');
});

Route::get('/guru/jadwal', function () {
    return view('guru.jadwal');
});

Route::get('/guru/cek-presensi', function () {
    return view('guru.cek-presensi');
});

Route::get('/guru/edit-presensi', function () {
    return view('guru.edit-presensi');
});

Route::get('/guru/akun', function () {
    return view('guru.akun');
});

Route::get('/guru/surat-masuk', function () {
    return view('guru.surat-masuk');
});

Route::get('/guru/cek-surat-masuk', function () {
    return view('guru.cek-surat-masuk');
});
