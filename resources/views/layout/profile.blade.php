<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prof.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet"> 
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="foto/prof.png" class="poto" width="150">
            <div class="menu">
                <h3 class="nama1">Hi! Nama</h3>
                <a href="dashboard" class="col">Kembali</a>
            </div>
        </div>
        <div class="card2">
            <div class="menu1">
                <h2>Setting</h2>
            </div>
            <div class="menu2">
                <div class="colum1">
                    <Label>Nama : </Label><br>
                    <input type="text" name="nama" value="Nama">
                    <a href="" class="btn1">Change</a>
                </div>
                <div class="colum2">
                    <Label>Email : </Label><br>
                    <input type="text" name="nama" value="abc12@gmail.com">
                    <a href="" class="btn2">Change</a>
                </div>
                <div class="colum3">
                    <Label>Password : </Label><br>
                    <input type="password" name="nama" value="password">
                    <a href="" class="btn3">Change</a>
                </div>
            </div>
            <div class="balik">
                @csrf
                <form action="/keluar" method="post">
                <button type="submit" class="back1">LogOut</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>