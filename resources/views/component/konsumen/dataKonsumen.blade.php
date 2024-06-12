<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konsumen</title>
    <link rel="stylesheet" href="{{asset('assets/css/tabel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/data.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="customer"></div>
      <h2 class="main--title">Data Konsumen</h2>
        <div class="tabular--wrapper">
          <div class="row-button">
            <ul class="left">
                <a class= "tambah" name="tambah" href="tambah_konsumen.php"><i class="fa fa-plus"></i> Tambah</a>
            </ul>
          </div>
      <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Konsumen</th>
                    <th scope="col">Nama Konsumen</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Terakhir Pembelian</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              <th scope="row">1</th>
              <td>ID001</td>
              <td>Cristina</td>
              <td>Jl. Raya Sungai Nipah</td>
              <td>0823-5251-8050</td>
              <td>25-06-2024</td>
              <td> 
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