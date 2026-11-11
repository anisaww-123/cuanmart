<!-- Form Pengiriman Barang saat Pesan -->
<div class="bg-white rounded-3xl p-6 shadow-lg border border-slate-200 max-w-lg mx-auto my-6">
    <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center space-x-2">
        <i class="fa-solid fa-truck-fast text-red-600"></i>
        <span>Informasi Pengiriman Pesanan</span>
    </h3>
    
    <form action="#" method="POST" class="space-y-4">
        <!-- Nama Penerima -->
        <div>
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Nama Penerima</label>
            <input type="text" placeholder="Masukkan nama lengkap penerima" required
                class="w-full py-2.5 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600 focus:bg-white transition">
        </div>

        <!-- Nomor HP / WhatsApp -->
        <div>
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Nomor HP / WhatsApp</label>
            <input type="tel" placeholder="081234567890" required
                class="w-full py-2.5 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600 focus:bg-white transition">
        </div>

        <!-- Alamat Lengkap -->
        <div>
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Alamat Lengkap Pengiriman</label>
            <textarea rows="3" placeholder="Nama jalan, nomor rumah, RT/RW, patokan..." required
                class="w-full py-2.5 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600 focus:bg-white transition resize-none"></textarea>
        </div>

        <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 rounded-xl transition text-sm">
            Lanjut ke Pembayaran
        </button>
    </form>
</div>