<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome'); // Route langsung Views tanpa controller
});

Route::resource('mahasiswa', MahasiswaController::class)->except(['show']); // Route ‘/mahasiswa’
Route::get('/mahasiswa/get-data', [MahasiswaController::class, 'getData'])->name('mahasiswa.get-data'); // Route JSON ‘/mahasiswa/get-data’
Route::resource('kontaks', KontakController::class); // routes mengunakan controller yakni akses controller 'KontakController' dengan akses link ‘/kontaks’