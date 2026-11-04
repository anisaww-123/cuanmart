@extends('layouts.app')

@section('title', 'Keranjang Belanja - CuanMart')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Judul Halaman -->
    <div class="mb-6">
        <h1 class="text-2xl font-extrabold text-slate-900">Keranjang Belanja Anda</h1>
        <p class="text-xs text-slate-500 mt-1">Periksa kembali barang belanjaanmu sebelum melanjutkan ke pembayaran.</p>
    </div>

    <!-- Layout Grid: Daftar Item (Kiri) & Ringkasan Pembayaran (Kanan) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Kolom Kiri: Daftar Produk di Keranjang -->
        <div class="lg:col-span-2 space-y-4">
            
            <!-- Item 1 -->
            <div class="bg-white rounded-2xl p-4 sm:p-6 border border-slate-200/70 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center space-x-4 w-full sm:w-auto">
                    <img src="https://images.unsplash.com/photo-1554866585-cd94860890b7?auto=format&fit=crop&w=200&q=80" alt="Produk" class="w-20 h-20 object-contain bg-slate-50 rounded-xl p-2 border border-slate-100 flex-shrink-0">
                    <div>
                        <span class="text-[10px] font-bold text-red-600 uppercase bg-red-50 px-2 py-0.5 rounded-md">Minuman</span>
                        <h3 class="font-bold text-sm text-slate-900 mt-1">Teh Botol Kotak Sosro 330ml</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Rp 3.800 / pcs</p>
                    </div>
                </div>

                <div class="flex items-center justify-between sm:justify-end w-full sm:w-auto space-x-6">
                    <!-- Tombol Kuantitas -->
                    <div class="flex items-center space-x-2 bg-slate-100 px-3 py-1.5 rounded-xl">
                        <button class="w-6 h-6 bg-white rounded-lg text-xs font-bold text-slate-700 shadow-sm hover:bg-red-50 hover:text-red-600 transition">-</button>
                        <span class="text-xs font-extrabold px-2">1</span>
                        <button class="w-6 h-6 bg-white rounded-lg text-xs font-bold text-slate-700 shadow-sm hover:bg-red-50 hover:text-red-600 transition">+</button>
                    </div>

                    <!-- Subtotal & Tombol Hapus -->
                    <div class="text-right">
                        <span class="text-xs text-slate-400 block">Subtotal</span>
                        <span class="text-sm font-extrabold text-slate-900">Rp 3.800</span>
                    </div>

                    <button class="text-slate-400 hover:text-red-600 transition p-2" title="Hapus produk">
                        <i class="fa-solid fa-trash-can text-sm"></i>
                    </button>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-2xl p-4 sm:p-6 border border-slate-200/70 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center space-x-4 w-full sm:w-auto">
                    <img src="https://images.unsplash.com/photo-1554866585-cd94860890b7?auto=format&fit=crop&w=200&q=80" alt="Produk" class="w-20 h-20 object-contain bg-slate-50 rounded-xl p-2 border border-slate-100 flex-shrink-0">
                    <div>
                        <span class="text-[10px] font-bold text-red-600 uppercase bg-red-50 px-2 py-0.5 rounded-md">Susu & Olahan</span>
                        <h3 class="font-bold text-sm text-slate-900 mt-1">Susu UHT Indomilk Cokelat 1L</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Rp 18.500 / pcs</p>
                    </div>
                </div>

                <div class="flex items-center justify-between sm:justify-end w-full sm:w-auto space-x-6">
                    <!-- Tombol Kuantitas -->
                    <div class="flex items-center space-x-2 bg-slate-100 px-3 py-1.5 rounded-xl">
                        <button class="w-6 h-6 bg-white rounded-lg text-xs font-bold text-slate-700 shadow-sm hover:bg-red-50 hover:text-red-600 transition">-</button>
                        <span class="text-xs font-extrabold px-2">1</span>
                        <button class="w-6 h-6 bg-white rounded-lg text-xs font-bold text-slate-700 shadow-sm hover:bg-red-50 hover:text-red-600 transition">+</button>
                    </div>

                    <!-- Subtotal & Tombol Hapus -->
                    <div class="text-right">
                        <span class="text-xs text-slate-400 block">Subtotal</span>
                        <span class="text-sm font-extrabold text-slate-900">Rp 18.500</span>
                    </div>

                    <button class="text-slate-400 hover:text-red-600 transition p-2" title="Hapus produk">
                        <i class="fa-solid fa-trash-can text-sm"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- Kolom Kanan: Ringkasan Belanja (Checkout Summary) -->
        <div>
            <div class="bg-white rounded-2xl p-6 border border-slate-200/70 shadow-sm space-y-4 sticky top-28">
                <h3 class="font-extrabold text-sm text-slate-900 uppercase tracking-wider pb-3 border-b border-slate-100">Ringkasan Belanja</h3>
                
                <div class="space-y-2 text-xs">
                    <div class="flex justify-between text-slate-500">
                        <span>Total Harga (2 Barang)</span>
                        <span class="font-bold text-slate-800">Rp 22.300</span>
                    </div>
                    <div class="flex justify-between text-slate-500">
                        <span>Biaya Layanan</span>
                        <span class="font-bold text-emerald-600">Gratis</span>
                    </div>
                    <div class="flex justify-between text-slate-500">
                        <span>Estimasi Ongkir</span>
                        <span class="font-bold text-slate-800">Rp 5.000</span>
                    </div>
                </div>

                <div class="pt-3 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-900">Total Tagihan</span>
                    <span class="text-base font-extrabold text-red-600">Rp 27.300</span>
                </div>

                <button onclick="alert('Melanjutkan ke proses pembayaran akhir!')" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-xl transition text-xs shadow-lg shadow-red-600/20">
                    Lanjut ke Pembayaran
                </button>
                <a href="{{ url('/') }}" class="block text-center w-full bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-2.5 rounded-xl transition text-xs">
                    Lanjut Belanja
                </a>
            </div>
        </div>

    </div>
</div>
@endsection