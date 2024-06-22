<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ITO</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/tabel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/df60d5ae41.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- Navigation Dashboard Utama -->
    @include('template_backend.sidebar')
    
    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>



