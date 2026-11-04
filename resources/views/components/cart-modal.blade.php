
@php
    $cartData = app(\App\Http\Controllers\CartController::class)->getCart();
@endphp

<!-- MODAL KERANJANG -->
<div id="cartModal"
    class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/70 backdrop-blur-md p-4"
    style="align-items: center; justify-content: center;">

        <!-- HEADER -->
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md h-[85vh] max-h-[700px] overflow-hidden flex flex-col border border-slate-100">

            <h3 class="font-bold text-base">
                <i class="fa-solid fa-cart-shopping text-red-500 mr-2"></i>
                Keranjang Belanja Kamu
            </h3>

            <button type="button"
                onclick="toggleCartModal()"
                class="text-slate-400 hover:text-white bg-white/10 w-8 h-8 rounded-full">

                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- ISI KERANJANG -->
        <div class="p-5 flex-1 overflow-y-auto space-y-4">

            @forelse($cartData['items'] as $item)

                <div class="flex items-center gap-4 border-b pb-4">

                    <!-- GAMBAR PRODUK -->
                    <img
                        src="{{ $item['gambar'] }}"
                        alt="{{ $item['nama'] }}"
                        class="w-16 h-16 object-contain bg-slate-50 rounded-xl"
                    >

                    <div class="flex-1">

                        <!-- NAMA PRODUK -->
                        <h4 class="font-bold text-xs text-slate-800">
                            {{ $item['nama'] }}
                        </h4>

                        <!-- HARGA -->
                        <p class="text-xs text-slate-400 mt-1">
                            Rp {{ number_format($item['harga'], 0, ',', '.') }}
                        </p>

                        <!-- JUMLAH PRODUK -->
                        <div class="flex items-center gap-3 mt-2">

                            <!-- KURANGI -->
                            <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                @csrf

                                <input type="hidden"
                                    name="jumlah"
                                    value="{{ $item['jumlah'] - 1 }}">

                                <button type="submit"
                                    class="w-7 h-7 bg-slate-100 rounded-lg">
                                    -
                                </button>
                            </form>

                            <span class="text-xs font-bold">
                                {{ $item['jumlah'] }}
                            </span>

                            <!-- TAMBAH -->
                            <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                @csrf

                                <input type="hidden"
                                    name="jumlah"
                                    value="{{ $item['jumlah'] + 1 }}">

                                <button type="submit"
                                    class="w-7 h-7 bg-slate-100 rounded-lg">
                                    +
                                </button>
                            </form>

                            <!-- HAPUS -->
                            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                @csrf

                                <button type="submit"
                                    class="text-red-600 ml-2"
                                    title="Hapus produk">

                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>

            @empty

                <!-- JIKA KERANJANG KOSONG -->
                <div class="text-center py-12">

                    <i class="fa-solid fa-cart-shopping text-4xl text-slate-300 mb-3"></i>

                    <p class="text-slate-500 text-sm">
                        Keranjang belanja masih kosong.
                    </p>

                </div>

            @endforelse

        </div>

        <!-- FOOTER -->
        <div class="p-5 bg-slate-50 border-t space-y-3">

            <div class="flex justify-between items-center">

                <span class="text-slate-500 text-sm">
                    Total Belanja:
                </span>

                <span class="font-extrabold text-slate-900 text-base">
                    Rp {{ number_format($cartData['total'], 0, ',', '.') }}
                </span>

            </div>

            <a href="{{ route('cart.index') }}"
                class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-bold py-3 rounded-xl">

                Checkout
            </a>

        </div>

    </div>
</div>
