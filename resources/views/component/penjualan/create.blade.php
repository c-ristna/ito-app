@extends('template_backend.home2')

@section('halaman', 'Tambah Data')

@section('content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>
  @endif

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penjualan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
        <div class="tambah-data">
            <h1>Tambah Data Penjualan</h1>
        <form method="POST" action="{{ url('penjualan') }}" enctype="multipart/form">
            @csrf
            <section class="base">
                <div class="form"></div>
                    <div>
                        <label for="kode_penjualan">Kode Penjualan</label>
                        <input type="text" id="form-control" name="kode_penjualan" autofocus="" required=""
                            placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Tanggal Penjualan</label>
                        <input type="date" id="form-control" name="tanggal_penjualan" autofocus="" required=""
                            placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">List Produk</label>
                        <select name="list_produk" class="form-control" required>
                            <option value="">Pilih Produk</option>
                            <option value="Puding">Puding</option>
                            <option value="Keripik pisang">Keripik Pisang</option>
                            <option value="Makaroni">Makaroni</option>
                            <!-- Add more options as needed -->
                          </select>
                    </div>
                    <div>
                        <label class="form-label">Total Harga</label>
                        <input type="decimal" id="form-control" name="total_harga" required="" placeholder="Ketik disini" />
                    </div>
                    <div class="form-group">
                        <label for="metode_pembayaran">Metode Pembayaran</label>
                        <select name="metode_pembayaran" id="metode_pembayaran" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="Cash" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Cash' ? 'selected' : '' }}>Cash</option>
                            <option value="Dana" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Dana' ? 'selected' : '' }}>Dana</option>
                            <option value="Bank" {{ isset($penjualan) && $penjualan->metode_pembayaran == 'Bank' ? 'selected' : '' }}>Bank</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_penjualan">Status Penjualan</label>
                        <select name="status_penjualan" id="status_penjualan" required>
                            <option value="">Pilih Status Penjualan</option>
                            <option value="Terkirim">Terkirim</option>
                            <option value="Tertunda">Tertunda</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Konsumen ID</label>
                        <input type="number" class="form-control" name="konsumens_id" required="" placeholder="Ketik disini" /> 
                    </div>
                    <div class="button-container">
                        <button type="cancel" class="btn btn-secondary">Kembali</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    </div>
            </section>
        </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>