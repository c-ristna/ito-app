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
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
        <div class="tambah-data">
            <h1>Tambah Data Penjualan</h1>
        <form method="POST" action="{{ url('penjualan/store') }}" enctype="multipart/form">
            @csrf
            <section class="base">
                <div class="form"></div>
                    <div>
                        <label for="kode_produk">Kode Produk</label>
                        <input type="text" id="form-control" name="kode_produk" autofocus="" required=""
                            placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Nama Produk</label>
                        <input type="text" id="form-control" name="nama_produk" autofocus="" required=""
                            placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Harga</label>
                        <input type="text" id="form-control" name="harga" required="" placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Stok</label>
                        <input type="text" id="form-control" name="stok" required="" placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Deskripsi</label>
                        <input type="text" id="form-control" name="deskripsi" required="" placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Status</label>
                        <input type="text" id="form-control" name="status" required="" placeholder="Ketik disini" /> 
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