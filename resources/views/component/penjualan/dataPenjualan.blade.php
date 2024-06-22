@extends('template_backend.home')

@section('title', 'Dashboard ITO - Penjualan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/tabel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endpush

@push('scripts')
    <script src="https://kit.fontawesome.com/df60d5ae41.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endpush

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="customer"></div>
    <h2 class="main--title">Data Penjualan</h2>
    <div class="tabular--wrapper">
    <div class="row-button">
                <ul class="left">
                    <a class="tambah" name="tambah" href="{{ url('/penjualan/create') }}">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </ul>
            </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Penjualan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">List Produk</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Metode Pembayaran</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjualan as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->kode_penjualan }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->list_produk }}</td>
                            <td>{{ $item->total_harga }}</td>
                            <td>{{ $item->metode_pembayaran }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <form action="{{ url('penjualan/' . $item->id) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger fa-solid fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
