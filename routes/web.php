
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfileSekolahController;
use App\Http\Controllers\SiswaController;
use App\Models\Ekstrakulikuler;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'index'])
    ->name('admin.login');

Route::post('Login-proses', [AuthController::class, 'processLogin'])
    ->name('admin.login.proses');


Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/ekstrakulikuler', [Ekstrakulikuler::class, 'index'])
        ->name('admin.ekstrakulikuler');

    Route::get('/siswa', [SiswaController::class, 'index'])
        ->name('admin.siswa');

    Route::get('/guru', [GuruController::class, 'index'])
        ->name('admin.guru');
    Route::get('/galeri', [GaleriController::class, 'index'])
        ->name('admin.galeri');

    Route::get('/berita', [BeritaController::class, 'index'])
        ->name('admin.berita');

    Route::get('/Profile', [ProfileSekolahController::class, 'index'])
        ->name('admin.profile');
    Route::get('/Profile/{profileSekolah}/edit', [ProfileSekolahController::class, 'edit'])
        ->name('admin.profile.edit');
});
