<?php

use App\Http\Controllers\Page\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/layanan/{slug}', [HomeController::class, 'layanan'])->name('layanan');