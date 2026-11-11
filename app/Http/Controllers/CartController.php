<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    private function products()
    {
        // Data sementara. Nanti diganti dengan database.
        return [
            1 => [
                'nama' => 'Teh Botol Sosro 330ml',
                'harga' => 3800,
                'gambar' => 'https://images.unsplash.com/photo-1554866585-cd94860890b7?w=400'
            ],
            2 => [
                'nama' => 'Beras Premium 5kg',
                'harga' => 75000,
                'gambar' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'
            ],
            3 => [
                'nama' => 'Minyak Goreng 1 Liter',
                'harga' => 18000,
                'gambar' => 'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?w=400'
            ],
            4 => [
                'nama' => 'Mie Instan Goreng',
                'harga' => 3500,
                'gambar' => 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=400'
            ],
            5 => [
                'nama' => 'Susu UHT 1 Liter',
                'harga' => 19000,
                'gambar' => 'https://images.unsplash.com/photo-1550583724-b2692b85b150?w=400'
            ]
        ];
    }

    public function index()
    {
        return view('cart.index');
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer'
        ]);

        $products = $this->products();
        $id = (int) $request->product_id;

        if (!isset($products[$id])) {
            return back()->with('error', 'Produk tidak ditemukan.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['jumlah']++;
        } else {
            $cart[$id] = [
                'jumlah' => 1
            ];
        }

        session()->put('cart', $cart);
dd([
    'pesan' => 'Produk berhasil diterima Laravel',
    'product_id' => $id,
    'isi_keranjang' => session()->get('cart')
]);

        return back()->with('success', 'Produk berhasil ditambahkan!');
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:0|max:999'
        ]);

        $cart = session()->get('cart', []);
        $id = (int) $id;

        if (!isset($cart[$id])) {
            return back()->with('error', 'Produk tidak ada di keranjang.');
        }

        if ($request->jumlah == 0) {
            unset($cart[$id]);
        } else {
            $cart[$id]['jumlah'] = (int) $request->jumlah;
        }

        session()->put('cart', $cart);

        return back();
    }

    public function remove(int $id)
    {
        $cart = session()->get('cart', []);

        unset($cart[(int) $id]);

        session()->put('cart', $cart);

        return back()->with('success', 'Produk dihapus.');
    }

    public function getCart()
    {
        $cart = session()->get('cart', []);
        $products = $this->products();

        $items = [];
        $total = 0;
        $count = 0;

        foreach ($cart as $id => $item) {
            if (!isset($products[$id])) {
                continue;
            }

            $product = $products[$id];
            $jumlah = $item['jumlah'];

            $subtotal = $product['harga'] * $jumlah;

            $items[$id] = array_merge($product, [
                'id' => $id,
                'jumlah' => $jumlah,
                'subtotal' => $subtotal
            ]);

            $total += $subtotal;
            $count += $jumlah;
        }

        return [
            'items' => $items,
            'total' => $total,
            'count' => $count
        ];
    }
}
