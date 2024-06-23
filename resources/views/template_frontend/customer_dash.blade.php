<div class="recentCustomers">
    <div class="cardHeader">
        <h2>Customer Terbaru</h2>
    </div>
    <table>
        <tbody>
            @forelse ($konsumen as $key => $item)
                <tr>
                    <td>
                        <div class="imgBx"><img src="{{ asset('assets/imgs/icon_people.jpg') }}" alt="{{ $item->nama_konsumen }}"></div>
                    </td>
                    <td>
                        <h4>{{ $item->nama_konsumen }} <br> <span>{{ $item->alamat }}</span></h4>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">Data tidak ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>

