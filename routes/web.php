<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ObatController;

Route::get('/', function () {
    return view('welcome');
});

// Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])
    ->name('pelanggan.index');

Route::post('/pelanggan', [PelangganController::class, 'store'])
    ->name('pelanggan.store');

Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])
    ->name('pelanggan.update');

Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])
    ->name('pelanggan.destroy');

// Staff
Route::get('/staff', [StaffController::class, 'index'])
    ->name('staff.index');

Route::post('/staff', [StaffController::class, 'store'])
    ->name('staff.store');

Route::put('/staff/{id}', [StaffController::class, 'update'])
    ->name('staff.update');

Route::delete('/staff/{id}', [StaffController::class, 'destroy'])
    ->name('staff.destroy');

// Obat
Route::get('/obat', [ObatController::class, 'index'])
    ->name('obat.index');

Route::post('/obat', [ObatController::class, 'store'])
    ->name('obat.store');

Route::put('/obat/{id}', [ObatController::class, 'update'])
    ->name('obat.update');

Route::delete('/obat/{id}', [ObatController::class, 'destroy'])
    ->name('obat.destroy');