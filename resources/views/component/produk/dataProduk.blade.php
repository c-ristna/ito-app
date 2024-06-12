<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
    <link rel="stylesheet" href="{{asset('assets/css/tabel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/data.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="customer"></div>
      <h2 class="main--title">Data Produk</h2>
        <div class="tabular--wrapper">
          <div class="row-button">
            <ul class="left">
                <a class= "tambah" name="tambah" href="tambah_produk.php"><i class="fa fa-plus"></i> Tambah</a>
            </ul>
          </div>
      <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Status Produk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($produk as $item)
              <th scope="row">1</th>
              <td>{{ $item->id }}</td>
              <td>{{ $item->nama_produk }}</td>
              <td>{{ $item->harga }}</td>
              <td>{{ $item->stok }}</td>
              <td>{{ $item->deskripsi }}</td>
              <td>{{ $item->status_produk }}</td>
              <td> 
              @endforeach
                  <button>
                      <i class="fa-solid fa-pen-to-square">Edit</i>
                  </button>
                  <button>
                      <i class="fa-solid fa-trash">Hapus</i>
                  </button>
              </td>    
            </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>