<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9d085cb130.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h1 class="title">SMKN 1 KATAPANG</h1>
            <h4 class="title2">Selamat Datang di Halaman Admin</h4>
            <ul>
                <li>
                    <a href="/admin">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="btn1">&nbsp; Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/list">
                        <span class="icon"><i class="fa-solid fa-address-card"></i></span>
                        <span class="btn2">&nbsp;Data Siswa</span>
                    </a>
                </li>
                <li>
                <a href="/set">
                        <span class="icon"><i class="fa-solid fa-money-bill-1-wave"></i></span>
                        <span class="btn3">&nbsp; Keuangan</span>
                    </a>
                </li>
                <li>
                    <a href="/komentar">
                        <span class="icon"><i class="fa-solid fa-book"></i></span>
                        <span class="btn3">&nbsp; Komentar</span>
                    </a>
                </li>
                <li>
                <a href="/gambar">
                        <span class="icon"><i class="fa-solid fa-chalkboard-user"></i></span>
                        <span class="btn3">&nbsp;Data Guru</span>
                    </a>    
                </li>
            </ul>
            <div class="log">
                <form action="/logout" method="post">
                <button type="submit" class="btnlog"><i class="fa-solid fa-right-to-bracket"></i> Log Out</button>
                </form>
            </div>
        </div>
        <div class="huhe">
            <div class="tuing">
                <h1>SELAMAT DATANG DI HALAMAN ADMIN</h1>
            </div>
        </div>
    </div>
</body>
</html>