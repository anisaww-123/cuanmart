<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Jangan lupa panggil Model Product

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Daftar data produk sembako untuk CuanMart
        $products = [
            [
                'name' => 'Beras Premium Setra Ramos 5kg',
                'price' => 65000.00,
                'stock' => 25,
                'description' => 'Beras putih pulen berkualitas tinggi, bersih dari kutu, dan pas untuk keluarga.',
                'image' => 'hero-sembako.jpg'
            ],
            [
                'name' => 'Minyak Goreng Sawit 2 Liter',
                'price' => 34000.00,
                'stock' => 40,
                'description' => 'Minyak goreng jernih dan sehat untuk menggoreng lebih renyah.',
                'image' => 'hero-sembako.jpg'
            ],
            [
                'name' => 'Gula Pasir Manis Kita 1kg',
                'price' => 14500.00,
                'stock' => 50,
                'description' => 'Gula pasir murni pilihan yang manis alami dan higienis.',
                'image' => 'hero-sembako.jpg'
            ],
            [
                'name' => 'Telur Ayam Ras 1kg',
                'price' => 28000.00,
                'stock' => 30,
                'description' => 'Telur ayam segar pilihan langsung dari peternak lokal.',
                'image' => 'hero-sembako.jpg'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}