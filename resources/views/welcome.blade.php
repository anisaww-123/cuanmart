<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CuanMart - Toko Sembako</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar Sederhana -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">🛒 CuanMart</a>
            <div class="ms-auto">
                <a href="{{ url('/admin/orders') }}" class="btn btn-light btn-sm fw-semibold">Dashboard Admin</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section / Cover Depan -->
    <div class="bg-white py-5 mb-4 shadow-sm border-bottom">
        <div class="container py-4 text-center">
            <h1 class="display-5 fw-bold text-success mb-3">Selamat Datang di CuanMart! 🛒</h1>
            <p class="col-md-8 mx-auto fs-5 text-muted">
                Pusat belanja kebutuhan sembako harian berkualitas tinggi, lengkap, cepat, dan terpercaya untuk
                keluarga.
            </p>
            <a href="#produk-section" class="btn btn-primary btn-lg mt-3 px-4">Mulai Belanja</a>
        </div>
    </div>

    <!-- Katalog Produk -->
    <div class="container my-5" id="produk-section">
        <h3 class="mb-4 fw-bold text-dark">Daftar Produk Pilihan</h3>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <!-- Gambar Produk -->
                        <img src="{{ asset('assets/img/' . $product->image) }}" class="card-img-top"
                            alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark">{{ $product->name }}</h5>
                            <p class="text-success fw-bold fs-5 mb-1">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</p>
                            <p class="text-muted small mb-2">Stok: {{ $product->stock }}</p>
                            <p class="card-text text-secondary small flex-grow-1">
                                {{ Str::limit($product->description, 60) }}</p>

                            <!-- Tombol Detail / Aksi -->
                            <a href="{{ url('/product/' . $product->id) }}"
                                class="btn btn-primary w-100 mt-2 fw-semibold">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer Sederhana -->
    <footer class="bg-white text-center py-4 mt-5 border-top text-muted small">
        <div class="container">
            &copy; 2026 CuanMart. Dibuat dengan penuh semangat oleh Anisa & Tim Rekayasa Perangkat Lunak SMKN 2
            Surabaya.
        </div>
    </footer>

    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
