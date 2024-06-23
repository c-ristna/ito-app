@extends('template_backend.home2')

@section('halaman', 'Edit Data')

@section('content')
@if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{ Session('success') }}
  </div>
@endif

<!doctype html>
<html lang="en">
<<<<<<< HEAD
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konsumen</title>
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="tambah-data">
      <h1>Edit Data Konsumen</h1>
      <form method="POST" action={{ url('konsumen/' . $konsumen->id) }}" enctype="multipart/form">
        @method('PATCH')    
        @csrf
        <section class="base">
          <div class="form">
            <div>
              <label for="kode_konsumen">Kode Konsumen</label>
              <input type="text" id="form-control" name="kode_konsumen" value="{{ $konsumen->kode_konsumen }}" autofocus="" required="" placeholder="Ketik disini" readonly />
            </div>
            <div>
              <label class="form-label">Nama Konsumen</label>
              <input type="text" id="form-control" name="nama_konsumen" value="{{ $konsumen->nama_konsumen }}" autofocus="" required="" placeholder="Ketik disini" />
            </div>
            <div>
              <label class="form-label">Alamat</label>
              <input type="text" id="form-control" name="alamat" value="{{ $konsumen->alamat }}" required="" placeholder="Ketik disini" />
            </div>
            <div>
              <label class="form-label">No Telepon</label>
              <input type="text" id="form-control" name="no_telepon" value="{{ $konsumen->no_telepon }}" required="" placeholder="Ketik disini" />
            </div>
            <div>
            <label class="form-label">Terakhir Pembelian</label>
              <input type="date" id="form-control" name="terakhir_pembelian" value="{{ $konsumen->terakhir_pembelian }}" required="" /> <br>
            </div>
            <div class="button-container">
                            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Kembali</button>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda yakin ingin menyimpan perubahan?');">Simpan</button>
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
=======

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Konsumen</title>
  <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="tambah-data">
    <h1>Edit Data Konsumen</h1>
    <form method="POST" action={{ url('konsumen/' . $konsumen->id) }}" enctype="multipart/form">
      @method('PATCH')
      @csrf
      <section class="base">
        <div class="form">
          <div>
            <label for="kode_konsumen">Kode Konsumen</label>
            <input type="text" id="form-control" name="kode_konsumen" value="{{ $konsumen->kode_konsumen }}"
              autofocus="" required="" placeholder="Ketik disini" readonly />
          </div>
          <div>
            <label class="form-label">Nama Konsumen</label>
            <input type="text" id="form-control" name="nama_konsumen" value="{{ $konsumen->nama_konsumen }}"
              autofocus="" required="" placeholder="Ketik disini" />
          </div>
          <div>
            <label class="form-label">Alamat</label>
            <input type="text" id="form-control" name="alamat" value="{{ $konsumen->alamat }}" required=""
              placeholder="Ketik disini" />
          </div>
          <div>
            <label class="form-label">No Telepon</label>
            <input type="text" id="form-control" name="no_telepon" value="{{ $konsumen->no_telepon }}" required=""
              placeholder="Ketik disini" />
          </div>
          <div>
            <label class="form-label">Terakhir Pembelian</label>
            <input type="date" id="form-control" name="terakhir_pembelian" value="{{ $konsumen->terakhir_pembelian }}"
              required="" /> <br>
          </div>
          <div class="button-container">
            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Kembali</button>
            <button type="submit" class="btn btn-success"
              onclick="return confirm('Apakah Anda yakin ingin menyimpan perubahan?');">Simpan</button>
          </div>
        </div>
      </section>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
>>>>>>> 63bbd449add966512746f91b46ae7afcaac0cac9
