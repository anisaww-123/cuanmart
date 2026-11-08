<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute untuk Halaman Utama / Katalog Produk (Mendukung fitur pencarian)
Route::get('/', [ProductController::class, 'index']);

// Rute untuk Halaman Detail Produk berdasarkan ID
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Rute untuk Menyimpan Pesanan / Checkout dari Halaman Detail Produk
Route::post('/product/{id}/order', [ProductController::class, 'storeOrder'])->name('product.order');

// Rute untuk Menampilkan Riwayat Pesanan (Dashboard Admin)
Route::get('/admin/orders', [ProductController::class, 'orderHistory'])->name('admin.orders');

// Rute untuk Fitur Keranjang Belanja (Cart)
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');