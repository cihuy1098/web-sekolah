<?php

use App\Http\Controllers\ProfileSekolahController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin_app');
});

Route::get('/profile', [ProfileSekolahController::class, 'index'])->name('admin.profile');
Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');
Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index'])->name('admin.ekstrakulikuler');
Route::get('/guru', [GuruController::class, 'index'])->name('admin.guru');
Route::get('/siswa', [SiswaController::class, 'index'])->name('admin.siswa');
Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri');

