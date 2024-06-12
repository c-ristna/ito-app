<head>
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/tabel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/data.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="customer"></div>
<h2 class="main--title">Data Admin</h2>
<div class="tabular--wrapper">
    <div class="row-button">
        <ul class="left">
            <a class= "tambah" name="tambah" href="tambah_admin.php"><i class="fa fa-plus"></i> Tambah +</a>
        </ul>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Admin</th>
                    <th scope="col">Nama Admin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                    
                </tr>
            </thead>
            <tbody>
            <th scope="row">1</th>
              <td>ID001</td>
              <td>Cristina</td>
              <td>ctina056@gmail.com</td>
              <td>1234</td>
              <td> 
                <button>
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
                <button>
                    <i class="fa-solid fa-trash"></i>
                </button>
              </td>    
            </tbody>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>