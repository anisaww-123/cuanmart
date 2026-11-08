<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Panggil Model Product
use App\Models\Order;   // Panggil Model Order

class ProductController extends Controller
{
    /**
     * Menampilkan semua data produk atau hasil pencarian ke halaman utama (welcome).
     */
    public function index(Request $request)
    {
        // Ambil kata kunci pencarian dari input user
        $search = $request->input('search');

        if ($search) {
            // Jika user mencari sesuatu, filter produk berdasarkan nama
            $products = Product::where('name', 'like', "%{$search}%")->get();
        } else {
            // Jika tidak ada pencarian, ambil semua data produk
            $products = Product::all();
        }

        // Mengirim data produk ke view welcome
        return view('welcome', compact('products'));
    }

    /**
     * Menampilkan detail produk berdasarkan ID yang diklik.
     */
    public function show($id)
    {
        // Mencari produk berdasarkan ID, jika tidak ada akan otomatis muncul halaman 404
        $product = Product::findOrFail($id);

        // Mengirim data produk ke view detail
        return view('products.show', compact('product'));
    }

    /**
     * Menyimpan data pesanan baru ke database dan mengurangi stok produk.
     */
    public function storeOrder(Request $request, $id)
    {
        // Validasi input dari pembeli
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);

        // Cek apakah stok mencukupi
        if ($request->quantity > $product->stock) {
            return redirect()->back()->with('error', 'Maaf, stok produk tidak mencukupi!');
        }

        $totalPrice = $product->price * $request->quantity;

        // Simpan pesanan ke tabel orders
        Order::create([
            'product_id' => $product->id,
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        // Kurangi stok produk secara otomatis di database
        $product->stock -= $request->quantity;
        $product->save();

        return redirect()->route('product.show', $id)->with('success', 'Pesanan berhasil dibuat!');
    }

    /**
     * Menampilkan daftar riwayat pesanan yang masuk (Dashboard Admin).
     */
    public function orderHistory()
    {
        // Ambil semua data pesanan diurutkan dari yang terbaru, beserta data produknya
        $orders = Order::with('product')->latest()->get();

        return view('admin.orders', compact('orders'));
    }
}