<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">                      
                    <!-- image -->
                    <img src="{{ asset('assets/imgs/logo.png') }}" alt="">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Login</header>
                        <form method="POST">
                            @csrf
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required="" autocomplete="off">
                                <label for="email">Email Address</label> 
                            </div> 
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required="">
                                <label for="password">Password</label>
                            </div> 
                            <div class="input-field">
                                <input type="submit" class="submit" name="submit" value="Login">
                            </div>
                        </form>
                        @if (session()->has('error'))
                            <p class="text-danger">{{ session('error') }}</p>
                        @endif
                    </div> 
                </div>  
            </div>
        </div>
    </div>
</body>
</html>