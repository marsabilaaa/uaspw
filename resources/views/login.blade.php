<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center">
            <br>Hotel</h3>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Oops!</b> {{session('error')}}
            </div>
            @endif
            @if(session('register_success'))
            <div class="alert alert-success">
                {{session('register_success')}}
                </div>
                @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="name" name="name" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <a href="/" class="btn btn-primary btn-block">Masuk Sebagai Guest</a>
                <hr>
                <p class="text-center">Belum punya akun? <a href="register">Register</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>
</html>