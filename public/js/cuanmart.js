// Status simulasi login & jumlah item di keranjang
let isUserLoggedIn = localStorage.getItem('cuanmart_login') === 'true';
let cartItemCount = 0; // Mulai dari 0 (kosong)

// 1. Fungsi Buka/Tutup Modal Login
function toggleLoginModal() {
    const modal = document.getElementById('loginModal');
    if (modal) {
        modal.classList.toggle('hidden');
    }
}

// 2. Fungsi Tutup & Reset Input Form
function closeAndResetModal() {
    const emailInput = document.getElementById('emailInput');
    const passwordInput = document.getElementById('passwordInput');
    const eyeIcon = document.getElementById('eyeIcon');

    if (emailInput) emailInput.value = '';
    if (passwordInput) {
        passwordInput.value = '';
        passwordInput.type = 'password';
    }
    
    if (eyeIcon) {
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }

    toggleLoginModal();
}

// 3. Fungsi Show/Hide Password (Ikon Mata)
function togglePasswordVisibility() {
    const passwordInput = document.getElementById('passwordInput');
    const eyeIcon = document.getElementById('eyeIcon');

    if (passwordInput && eyeIcon) {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
}

// 4. Proses Submit Login (Mengambil Nama Depan Email)
function handleLoginSubmit(event) {
    event.preventDefault();
    
    const emailInput = document.getElementById('emailInput');
    if (!emailInput) return;

    const emailValue = emailInput.value;
    
    // Ambil teks sebelum tanda @ dari email
    let username = emailValue.split('@')[0];
    username = username.replace(/[._]/g, ' ');
    username = username.charAt(0).toUpperCase() + username.slice(1);

    // Ambil 2 huruf pertama untuk inisial
    let initials = username.substring(0, 2).toUpperCase();

    // Tampilkan ke Navbar
    const userNameElem = document.getElementById('userNameDisplay');
    const userInitialsElem = document.getElementById('userInitialsDisplay');
    if (userNameElem) userNameElem.innerText = username;
    if (userInitialsElem) userInitialsElem.innerText = initials;

    isUserLoggedIn = true;
    localStorage.setItem('cuanmart_login', 'true');

    // Switch Tampilan Navbar dari Guest ke Member
    document.getElementById('authGuestSection')?.classList.add('hidden');
    document.getElementById('authMemberSection')?.classList.remove('hidden');

    // JANGAN tampilkan badge keranjang saat baru login jika keranjang masih 0 item
    updateCartBadgeDisplay();

    closeAndResetModal();
    alert('Berhasil Masuk sebagai ' + username + '!');
}

// 5. Fungsi Logout
function handleLogout() {
    isUserLoggedIn = false;
    localStorage.removeItem('cuanmart_login');
    cartItemCount = 0; // Reset keranjang jadi kosong saat logout

    document.getElementById('authGuestSection')?.classList.remove('hidden');
    document.getElementById('authMemberSection')?.classList.add('hidden');

    // Sembunyikan badge keranjang
    updateCartBadgeDisplay();

    alert('Anda telah keluar dari akun.');
}

// 6. Cek Login Saat Klik Keranjang
function handleCartClick() {
    if (!isUserLoggedIn) {
        alert('Silakan Masuk (Login) terlebih dahulu untuk melihat keranjang belanja!');
        toggleLoginModal();
    } else {
        if (cartItemCount === 0) {
            alert('Keranjang belanjaan kamu masih kosong.');
        } else {
            // Tampilkan modal keranjang jika sudah ada isinya
            const cartModal = document.getElementById('cartModal');
            if (cartModal) {
                cartModal.classList.toggle('hidden');
            }
        }
    }
}

// Fungsi Tutup Modal Keranjang
function toggleCartModal() {
    const modal = document.getElementById('cartModal');

    if (!modal) {
        console.error('Modal keranjang tidak ditemukan');
        return;
    }

    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        modal.style.display = 'flex';
    } else {
        modal.classList.add('hidden');
        modal.style.display = 'none';
    }
}

// 7. Cek Login Saat Klik Tambah Produk (+)
function handleAddToCart() {
    if (!isUserLoggedIn) {
        alert('Silakan Masuk (Login) terlebih dahulu untuk menambahkan produk ke keranjang!');
        toggleLoginModal();
    } else {
        // Jika sudah login, tambahkan jumlah item keranjang
        cartItemCount++;
        updateCartBadgeDisplay();
        alert('Produk berhasil ditambahkan ke keranjang!');
    }
}

// Fungsi pembantu untuk mengatur muncul/tidaknya badge angka keranjang
function updateCartBadgeDisplay() {
    const badge = document.getElementById('cartBadge');
    if (!badge) return;

    if (isUserLoggedIn && cartItemCount > 0) {
        badge.innerText = cartItemCount;
        badge.classList.remove('hidden');
        badge.classList.add('flex');
    } else {
        badge.classList.add('hidden');
        badge.classList.remove('flex');
    }
}


function toggleCartModal() {
    const modal = document.getElementById('cartModal');

    if (modal) {
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');
    }
}