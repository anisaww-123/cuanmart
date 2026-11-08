<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    // Fungsi untuk menampilkan daftar produk di keranjang
    public function index()
    {
        // Mengambil semua data cart beserta relasi ke tabel products
        $carts = Cart::with('product')->get();
        
        // Menghitung total keseluruhan harga belanjaan
        $totalPrice = $carts->sum(function($item) {
            return $item->product->price * $item->quantity;
        });

        return view('cart.index', compact('carts', 'totalPrice'));
    }

    // Fungsi store yang sebelumnya sudah kita buat
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Cart::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
}