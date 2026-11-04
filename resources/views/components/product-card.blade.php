<div class="bg-white rounded-2xl p-4 border border-slate-200/70 hover:shadow-xl transition duration-300 flex flex-col justify-between group">
    <div>
        <div class="relative bg-slate-50 rounded-xl overflow-hidden aspect-square mb-4 flex items-center justify-center p-2">
            <span class="absolute top-2 left-2 bg-red-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-md">Promo</span>
            <img src="https://images.unsplash.com/photo-1554866585-cd94860890b7?auto=format&fit=crop&w=400&q=80" alt="Produk CuanMart" class="object-contain h-full group-hover:scale-105 transition">
        </div>
        <span class="text-[11px] font-semibold text-slate-400 uppercase">Minuman</span>
        <h3 class="font-bold text-slate-800 text-sm mt-1 line-clamp-2">Teh Botol Kotak Sosro 330ml</h3>
        <p class="text-xs text-slate-400 mt-1">Kotak 330ml</p>
    </div>
    
    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
        <div>
            <span class="text-xs text-slate-400 block line-through">Rp 4.500</span>
            <span class="text-base font-extrabold text-slate-900">Rp 3.800</span>
        </div>
        
        <!-- Tombol Aksi (Keranjang & Beli Sekarang) -->
        <div class="flex items-center space-x-1.5">
            <!-- Tombol Tambah ke Keranjang (+) -->
            <button type="button" onclick="handleAddToCart()" class="w-9 h-9 bg-slate-100 hover:bg-red-50 hover:text-red-600 text-slate-600 rounded-xl transition flex items-center justify-center shadow-sm" title="Tambah ke Keranjang">
                <i class="fa-solid fa-cart-plus text-xs"></i>
            </button>
            
            <!-- Tombol Beli Sekarang (Instan) -->
            <button type="button" onclick="handleBuyNow()" class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold px-3 py-2.5 rounded-xl transition shadow-sm shadow-red-600/20">
                Beli
            </button>
        </div>
    </div>
</div>