<?php

//import controller EmployeController
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Web;

Route::get('/', function () {
    return 'Hallo Nama ku adalah LARAVEL, salam kenal';
});

Route::get('/about', function () {
    return '<h2>Ini adalah Halaman About</h2>';
});

Route::get('/web', [Web::class, 'home']);
Route::get('/web/profil', [Web::class, 'profil']);

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga'])
    ->name('kalkulator.segitiga');
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga'])
    ->name('kalkulator.segitiga.hitung');
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'home'])
    ->name('dashboard');
//dibawah sendiri
Route::get('/employe',[EmployeController::class, 'index']);
Route::get('/employe/create', [EmployeController::class, 'create']);
Route::post('/employe/store', [EmployeController::class, 'store']);
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
Route::put('/employe/{employe}', [EmployeController::class, 'update']);
Route::resource('admin', AdminController::class)->except('show');