<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - CuanMart</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Tombol Kembali -->
        <a href="{{ url('/') }}" class="btn btn-outline-secondary mb-4">&larr; Kembali ke Katalog</a>

        <!-- Notifikasi Sukses / Gagal -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <!-- Gambar Produk -->
                        <div class="col-md-5">
                            <img src="{{ asset('assets/img/' . $product->image) }}"
                                class="img-fluid rounded-start h-100 object-fit-cover" alt="{{ $product->name }}">
                        </div>

                        <!-- Informasi Detail & Form Pemesanan / Keranjang -->
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100">
                                <h3 class="card-title mb-2">{{ $product->name }}</h3>

                                <h4 class="text-success fw-bold mb-3">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </h4>

                                <p class="mb-2"><strong>Stok Tersedia:</strong> <span
                                        class="badge bg-secondary">{{ $product->stock }} unit</span></p>

                                <p class="card-text text-muted small mb-3">
                                    <strong>Deskripsi:</strong><br>
                                    {{ $product->description }}
                                </p>

                                <hr class="my-2">

                                <!-- Form Pemesanan / Checkout Langsung -->
                                <form action="{{ route('product.order', $product->id) }}" method="POST"
                                    class="mt-2">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="customer_name" class="form-label small fw-bold">Nama Pembeli</label>
                                        <input type="text" class="form-control form-control-sm" id="customer_name"
                                            name="customer_name" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="phone" class="form-label small fw-bold">Nomor WhatsApp /
                                            HP</label>
                                        <input type="text" class="form-control form-control-sm" id="phone"
                                            name="phone" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="quantity" class="form-label small fw-bold">Jumlah Beli</label>
                                        <input type="number" class="form-control form-control-sm" id="quantity"
                                            name="quantity" min="1" max="{{ $product->stock }}" value="1"
                                            required>
                                    </div>

                                    <button type="submit" class="btn btn-success w-100 btn-sm py-2 fw-bold mb-2">Beli
                                        Sekarang</button>
                                </form>

                                <!-- Form Tambah ke Keranjang (Cart) -->
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">

                                    <button type="submit" class="btn btn-outline-primary w-100 btn-sm py-2 fw-bold">
                                        🛒 Tambah ke Keranjang
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
