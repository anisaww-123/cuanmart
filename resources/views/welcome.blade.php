
@extends('layouts.app')

@section('title', 'CuanMart - Minimarket Paling Hemat')

@section('content')
@if(session('success'))
    <div class="max-w-7xl mx-auto mt-4 px-4">
        <div class="bg-green-100 text-green-700 p-4 rounded-xl font-semibold">
            <i class="fa-solid fa-circle-check mr-2"></i>
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="max-w-7xl mx-auto mt-4 px-4">
        <div class="bg-red-100 text-red-700 p-4 rounded-xl font-semibold">
            {{ session('error') }}
        </div>
    </div>
@endif

{{-- DATA PRODUK SEMENTARA --}}
{{-- Nantinya data ini akan diambil dari database MySQL --}}

@php
    $products = [
        [
            'id' => 1,
            'nama' => 'Teh Botol Sosro 330ml',
            'kategori' => 'Minuman',
            'deskripsi' => 'Teh kemasan kotak 330ml',
            'harga' => 3800,
            'harga_lama' => 4500,
            'gambar' => 'https://images.unsplash.com/photo-1554866585-cd94860890b7?w=400'
        ],
        [
            'id' => 2,
            'nama' => 'Beras Premium 5kg',
            'kategori' => 'Sembako',
            'deskripsi' => 'Beras putih premium kemasan 5kg',
            'harga' => 75000,
            'harga_lama' => 80000,
            'gambar' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'
        ],
        [
            'id' => 3,
            'nama' => 'Minyak Goreng 1 Liter',
            'kategori' => 'Sembako',
            'deskripsi' => 'Minyak goreng kemasan 1 liter',
            'harga' => 18000,
            'harga_lama' => 20000,
            'gambar' => 'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?w=400'
        ],
        [
            'id' => 4,
            'nama' => 'Mie Instan Goreng',
            'kategori' => 'Makanan',
            'deskripsi' => 'Mie instan goreng satu bungkus',
            'harga' => 3500,
            'harga_lama' => 4000,
            'gambar' => 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=400'
        ],
        [
            'id' => 5,
            'nama' => 'Susu UHT 1 Liter',
            'kategori' => 'Minuman',
            'deskripsi' => 'Susu cair UHT kemasan 1 liter',
            'harga' => 19000,
            'harga_lama' => 22000,
            'gambar' => 'https://images.unsplash.com/photo-1550583724-b2692b85b150?w=400'
        ]
    ];
@endphp

{{-- HERO BANNER --}}
@include('components.hero')

{{-- KATEGORI PRODUK --}}
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <div class="bg-white rounded-2xl p-6 shadow-sm">

        <h2 class="text-xl font-extrabold text-slate-900 mb-5">
            <i class="fa-solid fa-layer-group text-red-600 mr-2"></i>
            Kategori Pilihan
        </h2>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">

            <a href="#produk"
               class="bg-red-50 hover:bg-red-100 rounded-xl p-5 text-center transition">

                <i class="fa-solid fa-bowl-rice text-red-600 text-3xl mb-3"></i>

                <p class="font-bold text-sm">
                    Sembako
                </p>
            </a>

            <a href="#produk"
               class="bg-orange-50 hover:bg-orange-100 rounded-xl p-5 text-center transition">

                <i class="fa-solid fa-burger text-orange-500 text-3xl mb-3"></i>

                <p class="font-bold text-sm">
                    Makanan
                </p>
            </a>

            <a href="#produk"
               class="bg-blue-50 hover:bg-blue-100 rounded-xl p-5 text-center transition">

                <i class="fa-solid fa-bottle-water text-blue-500 text-3xl mb-3"></i>

                <p class="font-bold text-sm">
                    Minuman
                </p>
            </a>

            <a href="#produk"
               class="bg-green-50 hover:bg-green-100 rounded-xl p-5 text-center transition">

                <i class="fa-solid fa-soap text-green-600 text-3xl mb-3"></i>

                <p class="font-bold text-sm">
                    Kebersihan
                </p>
            </a>

        </div>

    </div>

</section>

{{-- DAFTAR PRODUK --}}
<section id="produk"
    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <div class="flex items-center justify-between mb-5">

        <h2 class="text-xl font-extrabold text-slate-900">
            <i class="fa-solid fa-fire text-red-600 mr-2"></i>
            Produk Pilihan Hemat
        </h2>

        <span class="text-sm text-slate-500">
            {{ count($products) }} Produk
        </span>

    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">

        @foreach ($products as $product)

            @include('components.product-card', [
                'product' => $product
            ])

        @endforeach

    </div>

</section>

{{-- MODAL KERANJANG --}}
@include('components.cart-modal')

{{-- FOOTER --}}
@include('components.footer')

@endsection
