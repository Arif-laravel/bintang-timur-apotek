<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;

Route::get('/obat', [ObatController::class, 'apiIndex']);
Route::post('/obat', [ObatController::class, 'apiStore']);
Route::get('/obat/{id}', [ObatController::class, 'apiShow']);
Route::put('/obat/{id}', [ObatController::class, 'apiUpdate']);
Route::delete('/obat/{id}', [ObatController::class, 'apiDestroy']);