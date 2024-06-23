<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Pesanan Terkini</h2>
            <a href="{{ url('/penjualan') }}" class="btn">Lihat Detail</a>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Nama</td>
                    <td>Produk</td>
                    <td>Pembayaran</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                @forelse ($penjualan as $key => $item)
                    <tr>
                        <td>{{ $item->nama_konsumen }}</span></td>
                        <td>{{ is_array($item->list_produk) ? implode(', ', $item->list_produk) : $item->list_produk }}</td>
                        <td>{{ $item->metode_pembayaran }}</td>
                        <td>{{ $item->status }}</></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Data tidak ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>



