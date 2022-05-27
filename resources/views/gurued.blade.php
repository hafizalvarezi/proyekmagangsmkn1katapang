<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9d085cb130.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="gurued.css">
    <title>Daftar Guru</title>
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
                        <span class="btn2">&nbsp; List Data Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="/kasad">
                        <span class="icon"><i class="fa-solid fa-coins"></i></span>
                        <span class="btn3">&nbsp; Keuangaan Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="/gurued">
                        <span class="icon"><i class="fa-solid fa-chalkboard-user"></i></span>
                        <span class="btn4">&nbsp; Data guru</span>
                    </a>
                </li>
            </ul>
            <div class="log">
                <form action="/logout" method="post">
                <button type="submit" class="btnlog"><i class="fa-solid fa-right-to-bracket"></i> Log Out</button>
                </form>
            </div>
            <div class="hal">
               <b> HALAMAN GURU</b>
            </div>
            <a href="/buat"><button type = "button" class="dft">Tambah Guru</button></a>
        <div class="not">
            <div class="not-1">
            <table class="adm1" border="1px" align="center" width="700">
                <tr align="center">
                    <th>NO</th>
                    <th>PROFIL</th>
                    <th>NUPTK</th>
                    <th>NAMA GURU</th>
                    <th>MATA PELAJARAN</th>
                    <th>AKSI</th>
                </tr>
                @foreach($dataGambar as $item)
                <tr align="center">
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img src="{{asset ( 'image/'.$item->gambar) }}" height="50px" width="50px" alt="not found" srcset="">
                    </td>
                    <td>{{$item->nuptk}}</td>
                    <td>{{$item->nama}}</td>  
                    <td>{{$item->mapel}}</td>
                    <td><a class="btne" href={{"delete/".$item['id']}}>Hapus</a></td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>