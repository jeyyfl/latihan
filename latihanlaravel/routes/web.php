<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AuthController;

// ==========================================
// RUTE PUBLIK (Bebas diakses tanpa login)
// ==========================================

// Rute untuk Register (Daftar Akun)
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Rute untuk Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


// ==========================================
// RUTE TERKUNCI (Wajib login terlebih dahulu)
// ==========================================
Route::middleware(['auth'])->group(function () {

    // Rute untuk Logout
    Route::get('/logout', [AuthController::class, 'logout']);

    // Rute CRUD Penerbangan
    Route::get('/flights', [FlightController::class, 'index']);
    Route::get('/flights/create', [FlightController::class, 'create']);
    Route::post('/flights', [FlightController::class, 'store']);
    Route::get('/flights/{id}/edit', [FlightController::class, 'edit']);
    Route::put('/flights/{id}', [FlightController::class, 'update']);
    Route::delete('/flights/{id}', [FlightController::class, 'destroy']);

});