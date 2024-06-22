@section('halaman', 'Edit Data')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
        <div class="tambah-data">
            <h1>Edit Data Admin</h1>
        <form method="POST" action="{{ url('admin/' . $admin->id) }}" enctype="multipart/form">
        @method('PATCH')    
        @csrf
            <section class="base">
                <div class="form"></div>
                    <div>
                        <label class="form-label">Nama Admin</label>
                        <input type="text" id="form-control" name="nama_admin" value="{{ $admin->nama_admin }}" autofocus="" required=""
                            placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="text" id="form-control" name="email" value="{{ $admin->email }}" required="" placeholder="Ketik disini" />
                    </div>
                    <div>
                        <label class="form-label">Password</label>
                        <input type="password" id="form-control" name="password" value="{{ $admin->password }}" required="" placeholder="Ketik disini" readonly/>
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