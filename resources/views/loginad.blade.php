<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lgn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Login Admiin</title>
</head>
<body>
    <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif
        <div class="card">
            <img src="background/ktpang.png" class="avatar">
            <form action="/loginad" method="post">
                @csrf
                <div class="title">
                    <h1>Masuk Sebagai Admin</h1>
                </div>
            <div class="col">
                <div class="col-1">
                    <label for="">USERNAME</label><br>
                    <input type="text" name="name" id="name" placeholder="Masukan username anda" require>
                </div>
                <div class="col-2">
                    <label for="">EMAIL</label><br>
                    <input type="text" name="email" id="email" placeholder="example@email.com" require>
                </div>
                <div class="col-3">
                    <label for="">Password</label><br>
                    <input type="password" name="password" id="password" placeholder="Masukan Password" require>
                </div>
                <div class="sign">
                    <h3>belum punya akun ? bisa signin <a href="/sign">DISINI</a></h3>
                </div>
            </div>
                <div class="btn-sub">
                    <input type="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</body>
</html>