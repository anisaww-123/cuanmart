<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan - CuanMart Admin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>📦 Riwayat Pesanan Masuk - CuanMart</h2>
            <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Katalog</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>No. HP / WhatsApp</th>
                                <th>Produk Dibeli</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Waktu Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $index => $order)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="fw-bold">{{ $order->customer_name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>
                                        <!-- Cek jika relasi produk ada -->
                                        {{ $order->product ? $order->product->name : 'Produk Telah Dihapus' }}
                                    </td>
                                    <td><span class="badge bg-secondary">{{ $order->quantity }} pcs</span></td>
                                    <td class="text-success fw-bold">Rp
                                        {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                    <td class="small text-muted">{{ $order->created_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-muted">Belum ada pesanan yang masuk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
