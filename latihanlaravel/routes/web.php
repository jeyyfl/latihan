<?php

use App\Http\Controllers\FlightController;

// Rute yang sudah ada (menampilkan data)
Route::get('/flights', [FlightController::class, 'index']);

// 2 Rute baru untuk Tambah Data
Route::get('/flights/create', [FlightController::class, 'create']); // Membuka halaman form
Route::post('/flights', [FlightController::class, 'store']);        // Memproses simpan data ke database

// Rute untuk Edit Data
Route::get('/flights/{id}/edit', [FlightController::class, 'edit']); // Membuka halaman form edit
Route::put('/flights/{id}', [FlightController::class, 'update']);    // Memproses simpan data editan

// Rute untuk Hapus Data (Delete)
Route::delete('/flights/{id}', [FlightController::class, 'destroy']);