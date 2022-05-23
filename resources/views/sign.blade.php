<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dftad.css">
    <title>DAFTAR MENJADI ADMIN</title>
</head>
<body>
    <div class="container">
        <div>
            <h2><a class="back" href="/loginad">Kembali</a></h2>
        </div>
        <div class="card">
        @error('name')
            <div class="invalid-floating">
                <p class="inva">TERJADI KESALAHAN!</p>
            </div>
        @enderror
            <div class="col">
            <img src="background/ktpang.png" class="avatar">
                <form action="/sign" method="POST">
                    @csrf
                    <div class="title">
                    <h1>Membuat Akun Baru</h1>
                    </div>
                    <div class="col-1">
                        <label for="name">Masukan Nama</label><br>
                        <input type="text" name="name" id="name" placeholder="Masukan Nama Anda" require>
                    </div>
                    <div class="col-2">
                        <label for="email">Masukan Email</label><br>
                        <input type="email" name="email" id="email" placeholder="example@email.com" require>
                    </div>
                    <div class="col-3">
                        <label for="password">Membuat Password</label><br>
                        <input type="password" name="password" id="password" placeholder="Buat Password" require>
                    </div>
                    <input type="submit" class="btn" value="SELESAI">
                </form>
            </div>
        </div>
    </div>
</body>
</html>