<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [ProdukController::class, 'index'])->name('index.index');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('produk/show/{id}', [ProdukController::class, 'show'])->name('produk.show');

