<!-- NAVBAR UTAMA -->
<header class="bg-white/90 backdrop-blur-md border-b border-slate-200 sticky top-0 z-40 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo & Brand Name -->
            <a href="#" class="flex items-center space-x-3 group">
                <img src="{{ asset('images/logow.png') }}" alt="CuanMart Logo" class="h-10 w-auto object-contain">
                <div>
                    <span class="text-[11px] font-medium text-slate-400 mt-1 block">Minimarket Paling Hemat</span>
                </div>
            </a>

            <!-- Search Bar -->
            <div class="hidden md:flex flex-1 max-w-md mx-8">
                <div class="relative w-full">
                    <input type="text" placeholder="Cari beras, snack, minuman dingin, susu..." 
                        class="w-full py-2.5 pl-11 pr-4 bg-slate-100 hover:bg-slate-200/60 focus:bg-white text-slate-800 placeholder-slate-400 rounded-2xl border border-transparent focus:border-red-600 focus:outline-none focus:ring-4 focus:ring-red-600/10 text-sm transition">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass text-slate-400 text-sm"></i>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center space-x-3">
                <a href="https://wa.me/62895805309736" target="_blank" class="hidden sm:flex items-center space-x-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold px-4 py-2.5 rounded-xl transition">
                    <i class="fa-brands fa-whatsapp text-emerald-600 text-base"></i>
                    <span>Bantuan WA</span>
                </a>

                <!-- KONDISI 1: BELUM LOGIN -->
                <div id="authGuestSection" class="flex items-center space-x-3">
                    <button type="button" onclick="toggleLoginModal()" class="flex items-center space-x-2 bg-red-50 hover:bg-red-100 text-red-600 text-xs font-semibold px-4 py-2.5 rounded-xl transition border border-red-200">
                        <i class="fa-solid fa-user"></i>
                        <span>Masuk</span>
                    </button>
                </div>

                <!-- KONDISI 2: SUDAH LOGIN -->
                <div id="authMemberSection" class="hidden flex items-center space-x-3">
                    <div class="flex items-center space-x-2 bg-slate-100 px-3 py-2 rounded-xl">
                        <div id="userInitialsDisplay" class="w-8 h-8 bg-red-600 text-white rounded-lg flex items-center justify-center font-bold text-xs">
                            --
                        </div>
                        <div class="text-left hidden sm:block">
                            <span id="userNameDisplay" class="text-xs font-bold text-slate-900 block leading-tight">Pengguna</span>
                            <span class="text-[10px] text-emerald-600 font-semibold">Pelanggan Aktif</span>
                        </div>
                    </div>
                    <button type="button" onclick="handleLogout()" class="bg-slate-100 hover:bg-red-50 hover:text-red-600 text-slate-600 p-2.5 rounded-xl transition text-xs" title="Keluar">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </div>

                <!-- TOMBOL KERANJANG BELANJA -->
                <button type="button" onclick="handleCartClick()" class="relative bg-red-600 hover:bg-red-700 text-white font-medium p-3 rounded-2xl transition shadow-lg shadow-red-600/20">
                    <i class="fa-solid fa-cart-shopping text-base"></i>
                    <span id="cartBadge" class="hidden absolute -top-1.5 -right-1.5 bg-amber-400 text-slate-950 text-[10px] font-bold w-5 h-5 rounded-full items-center justify-center border-2 border-white">2</span>
                </button>
            </div>

        </div>
    </div>
</header>

<!-- MODAL POPUP LOGIN -->
<div id="loginModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/70 backdrop-blur-md p-4 sm:p-6 md:p-10">
    <div class="min-h-full flex items-center justify-center">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden relative transform transition-all my-8 border border-slate-100">
            
            <!-- Header Modal -->
            <div class="bg-gradient-to-r from-red-600 to-orange-500 p-6 text-white relative">
                <button type="button" onclick="closeAndResetModal()" class="absolute top-4 right-4 text-white bg-black/20 hover:bg-black/40 w-9 h-9 rounded-full flex items-center justify-center transition shadow-md">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
                <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-3">
                    <i class="fa-solid fa-lock text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold">Masuk ke CuanMart</h3>
                <p class="text-xs text-white/80 mt-1">Silakan masukkan email dan password akun Anda.</p>
            </div>

            <!-- Form Login -->
            <form id="loginForm" onsubmit="handleLoginSubmit(event)" class="p-6 space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Email</label>
                    <div class="relative">
                        <input type="email" id="emailInput" placeholder="Inputkan Email Anda..." required
                            class="w-full py-2.5 pl-10 pr-4 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600 focus:bg-white transition">
                        <i class="fa-solid fa-envelope absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Password</label>
                    <div class="relative">
                        <input type="password" id="passwordInput" placeholder="••••••••" required
                            class="w-full py-2.5 pl-10 pr-10 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-red-600 focus:bg-white transition">
                        <i class="fa-solid fa-lock absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 transition">
                            <i id="eyeIcon" class="fa-solid fa-eye text-sm"></i>
                        </button>
                    </div>
                </div>

                <div class="pt-2 space-y-2">
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-xl shadow-lg shadow-red-600/30 transition duration-200 text-sm">
                        Masuk
                    </button>
                    <button type="button" onclick="closeAndResetModal()" class="w-full bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-2.5 rounded-xl transition text-xs">
                        Batal
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>