
@extends('layouts.app')

@section('title', 'Keranjang Belanja - CuanMart')

@section('content')

@php
    $cartData = app(\App\Http\Controllers\CartController::class)->getCart();
@endphp

<section class="max-w-7xl mx-auto px-4 py-10">

    <h1 class="text-2xl font-extrabold mb-6">
        <i class="fa-solid fa-cart-shopping text-red-600 mr-2"></i>
        Keranjang Belanja
    </h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-xl mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Daftar Produk -->
        <div class="lg:col-span-2 bg-white rounded-2xl p-6 shadow-sm">

            @forelse($cartData['items'] as $item)

                <div class="flex gap-4 border-b py-5">

                    <img src="{{ $item['gambar'] }}"
                         alt="{{ $item['nama'] }}"
                         class="w-24 h-24 object-contain rounded-xl bg-slate-50">

                    <div class="flex-1">

                        <h3 class="font-bold text-slate-800">
                            {{ $item['nama'] }}
                        </h3>

                        <p class="text-red-600 font-bold mt-1">
                            Rp {{ number_format($item['harga'], 0, ',', '.') }}
                        </p>

                        <div class="flex items-center gap-3 mt-4">

                            <!-- Kurangi -->
                            <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                @csrf
                                <input type="hidden" name="jumlah" value="{{ $item['jumlah'] - 1 }}">
                                <button class="bg-slate-100 px-3 py-1 rounded-lg">-</button>
                            </form>

                            <span class="font-bold">
                                {{ $item['jumlah'] }}
                            </span>

                            <!-- Tambah -->
                            <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                @csrf
                                <input type="hidden" name="jumlah" value="{{ $item['jumlah'] + 1 }}">
                                <button class="bg-slate-100 px-3 py-1 rounded-lg">+</button>
                            </form>

                            <!-- Hapus -->
                            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                @csrf
                                <button class="text-red-600 ml-3">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>

                        </div>

                    </div>

                    <div class="hidden sm:block font-bold text-slate-800">
                        Rp {{ number_format($item['subtotal'], 0, ',', '.') }}
                    </div>

                </div>

            @empty

                <div class="text-center py-16">
                    <i class="fa-solid fa-cart-shopping text-5xl text-slate-300 mb-4"></i>
                    <p class="text-slate-500">Keranjang belanja masih kosong.</p>

                    <a href="{{ route('home') }}"
                       class="inline-block mt-5 bg-red-600 text-white px-6 py-3 rounded-xl">
                        Mulai Belanja
                    </a>
                </div>

            @endforelse

        </div>

        <!-- Ringkasan Belanja -->
        <div class="bg-white rounded-2xl p-6 shadow-sm h-fit">

            <h2 class="text-lg font-bold mb-5">
                Ringkasan Belanja
            </h2>

            <div class="flex justify-between text-sm mb-3">
                <span>Total Barang</span>
                <span>{{ $cartData['count'] }}</span>
            </div>

            <div class="flex justify-between border-t pt-4">
                <span class="font-bold">Total Harga</span>

                <span class="font-extrabold text-red-600 text-xl">
                    Rp {{ number_format($cartData['total'], 0, ',', '.') }}
                </span>
            </div>

            @if($cartData['count'] > 0)
                <button type="button"
                    disabled
                    class="block w-full mt-6 bg-slate-300 text-slate-600 text-center font-bold py-3 rounded-xl cursor-not-allowed">
                    Checkout (Segera Hadir)
                </button>
            @endif

            <a href="{{ route('home') }}"
               class="block text-center mt-4 text-sm text-slate-500 hover:text-red-600">
                Lanjut Belanja
            </a>

        </div>

    </div>

</section>

@endsection
