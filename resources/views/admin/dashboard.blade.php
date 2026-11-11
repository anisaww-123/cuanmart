<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Admin -->
    <div class="bg-slate-900 text-white rounded-3xl p-8 shadow-xl mb-8 flex flex-col md:flex-row items-center justify-between">
        <div>
            <span class="bg-red-600 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Panel Administrator</span>
            <h1 class="text-2xl sm:text-3xl font-extrabold mt-2">Manajemen CuanMart ⚡</h1>
            <p class="text-slate-400 text-sm mt-1">Pantau stok produk, pesanan masuk, dan laporan harian minimarket.</p>
        </div>
        <div class="mt-4 md:mt-0 flex space-x-3">
            <button class="bg-red-600 hover:bg-red-500 text-white font-bold px-4 py-2.5 rounded-xl text-sm transition shadow-lg">
                <i class="fa-solid fa-plus mr-1"></i> Tambah Produk Baru
            </button>
        </div>
    </div>

    <!-- Statistik Singkat Minimarket -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-red-50 text-red-600 rounded-2xl flex items-center justify-center font-bold text-xl">
                <i class="fa-solid fa-box-open"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-slate-400 uppercase">Total Produk</span>
                <h3 class="text-2xl font-extrabold text-slate-900">142 Item</h3>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center font-bold text-xl">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-slate-400 uppercase">Pesanan Masuk</span>
                <h3 class="text-2xl font-extrabold text-slate-900">8 Pesanan</h3>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center font-bold text-xl">
                <i class="fa-solid fa-wallet"></i>
            </div>
            <div>
                <span class="text-xs font-semibold text-slate-400 uppercase">Pendapatan Hari Ini</span>
                <h3 class="text-2xl font-extrabold text-slate-900">Rp 1.450.000</h3>
            </div>
        </div>
    </div>

    <!-- Tabel Daftar Pesanan Pelanggan (Yang Perlu Dikirim) -->
    <div class="bg-white rounded-3xl shadow-md border border-slate-200 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-900 text-lg">Pesanan Pelanggan Terbaru</h3>
            <span class="text-xs text-slate-400 font-semibold">Live Update</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 text-slate-400 text-xs uppercase font-bold tracking-wider">
                        <th class="p-4">ID Pesanan</th>
                        <th class="p-4">Nama Pelanggan</th>
                        <th class="p-4">Alamat Pengiriman</th>
                        <th class="p-4">Total</th>
                        <th class="p-4">Status</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                    <tr>
                        <td class="p-4 font-bold text-slate-900">#CM-98214</td>
                        <td class="p-4">Budi Santoso <span class="block text-xs text-slate-400">081234567890</span></td>
                        <td class="p-4 text-xs text-slate-500 max-w-xs truncate">Jl. Merdeka No. 45, Keputih, Surabaya</td>
                        <td class="p-4 font-bold text-slate-900">Rp 68.800</td>
                        <td class="p-4"><span class="bg-amber-100 text-amber-700 text-xs font-bold px-2.5 py-1 rounded-full">Perlu Dikemas</span></td>
                        <td class="p-4 text-center">
                            <button class="bg-slate-900 hover:bg-slate-800 text-white text-xs font-semibold px-3 py-1.5 rounded-xl transition">Proses</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 font-bold text-slate-900">#CM-98213</td>
                        <td class="p-4">Siti Aminah <span class="block text-xs text-slate-400">089876543210</span></td>
                        <td class="p-4 text-xs text-slate-500 max-w-xs truncate">Jl. Arief Rachman Hakim No. 12, Surabaya</td>
                        <td class="p-4 font-bold text-slate-900">Rp 124.000</td>
                        <td class="p-4"><span class="bg-emerald-100 text-emerald-700 text-xs font-bold px-2.5 py-1 rounded-full">Selesai</span></td>
                        <td class="p-4 text-center">
                            <button class="bg-slate-100 hover:bg-slate-200 text-slate-600 text-xs font-semibold px-3 py-1.5 rounded-xl transition">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>