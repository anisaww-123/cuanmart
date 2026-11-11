<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Sambutan Pelanggan -->
    <div class="bg-gradient-to-r from-red-600 to-orange-500 rounded-3xl p-8 text-white shadow-xl mb-8 flex flex-col md:flex-row items-center justify-between">
        <div>
            <span class="bg-white/20 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Akun Pelanggan CuanMart</span>
            <h1 class="text-2xl sm:text-3xl font-extrabold mt-2">Halo, Selamat Datang di CuanMart! 👋</h1>
            <p class="text-white/80 text-sm mt-1">Selamat berbelanja kembali. Kebutuhan harianmu siap diantar cepat.</p>
        </div>
        <div class="mt-4 md:mt-0">
            <span class="bg-white text-red-600 font-bold px-4 py-2 rounded-xl text-sm shadow-md inline-block">
                <i class="fa-solid fa-coins mr-1"></i> Poin Cuan: 250 Pts
            </span>
        </div>
    </div>

    <!-- Grid Menu Pelanggan -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Kolom Kiri & Tengah: Form Alamat & Checkout Cepat -->
        <div class="md:col-span-2 bg-white rounded-3xl p-6 shadow-md border border-slate-200">
            <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center space-x-2">
                <i class="fa-solid fa-truck-fast text-red-600"></i>
                <span>Alamat Pengiriman Utama</span>
            </h3>
            <form action="#" method="POST" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Nama Penerima</label>
                        <input type="text" value="Budi Santoso" class="w-full py-2.5 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Nomor HP / WhatsApp</label>
                        <input type="tel" value="081234567890" class="w-full py-2.5 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Alamat Lengkap</label>
                    <textarea rows="3" class="w-full py-2.5 px-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600 resize-none">Jl. Merdeka No. 45, RT 02/RW 05, Kel. Keputih, Surabaya</textarea>
                </div>
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow-md shadow-red-600/20">
                    Simpan Perubahan Alamat
                </button>
            </form>
        </div>

        <!-- Kolom Kanan: Status Pesanan Terakhir -->
        <div class="bg-white rounded-3xl p-6 shadow-md border border-slate-200 flex flex-col justify-between">
            <div>
                <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center space-x-2">
                    <i class="fa-solid fa-bag-shopping text-red-600"></i>
                    <span>Pesanan Aktif</span>
                </h3>
                <div class="bg-slate-50 rounded-2xl p-4 border border-slate-100 text-sm">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-slate-800">#CM-98214</span>
                        <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-2 py-0.5 rounded-full">Dikemas</span>
                    </div>
                    <p class="text-xs text-slate-500">2 Item (Teh Sosro, Beras 5kg)</p>
                    <p class="text-xs font-bold text-slate-900 mt-2">Total: Rp 68.800</p>
                </div>
            </div>
            <a href="#riwayat" class="text-center text-xs font-bold text-red-600 hover:text-red-700 mt-4 block">
                Lihat Riwayat Pesanan Lengkap <i class="fa-solid fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</div>