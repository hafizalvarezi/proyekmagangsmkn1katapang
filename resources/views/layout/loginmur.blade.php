<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="card">
        <img src="background/ktpang.png" class="avatar">
            <form action="/loginmur" method="post">
                @csrf
                <br><br>
                <div class="title">
                    <h1>Login</h1>
                </div>
                <div class="col1">
                    <label for="nama">Nama Siswa</label><br>
                    <input type="text" placeholder="Masukan Nama" name="nama" require>
                </div>
            
                <div class="col2">
                    <label for="email">Email</label><br>
                    <input type="text" placeholder="Masukan Email" name="email" require>
                </div>
                
                <div class="col3">
                    <label for="pass">Password</label><br>
                    <input type="password" placeholder="masukan password" name="pass" require>
                </div>
                <br>
                <div class="reg">
                    Belum punya akun?<a href="/regismur">Daftar disini</a>
                </div>
                <br>
                <div class="submit">
                    <input type="submit">
                </div>
                <br>
            </form>
        </div>
    </div>
</body>
</html>