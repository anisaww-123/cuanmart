
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

// Halaman Beranda
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman Keranjang
Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

// Tambah Produk ke Keranjang
Route::post('/cart/add', [CartController::class, 'add'])
    ->name('cart.add');

// Update Jumlah Produk
Route::post('/cart/update/{id}', [CartController::class, 'update'])
    ->name('cart.update');

// Hapus Produk dari Keranjang
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');
