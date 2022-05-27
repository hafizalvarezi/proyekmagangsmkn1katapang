<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9d085cb130.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="list.css">
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
                @csrf
                <button type="submit" class="btnlog"><i class="fa-solid fa-right-to-bracket"></i> Log Out</button>
                </form>
            </div>
        </div>
        <div class="huhe">
            <div class="tuing">
            <div class="but">
            <a href="{{route('daftar')}}"><button type="button" class="dft">Daftarkan Siswa</button></a>
        </div>
        <div class="table">
        <table class="tbl" border="1px" align="center" width="1116">
                <tr align="center">
                    <td>ID</td>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Jurusan</td>
                    <td>Tanggal Lahir</td>
                    <td>Admin</td>
                </tr>
                @foreach ($dtsiswa as $item)
                <tr align="center">
                    <td>{{$item->id}}</td>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->jrs}}</td>
                    <td>{{$item->ttg}} {{$item->bulan}} {{$item->tahun}}</td>
                    <td><a class="btne" href={{"edit/".$item['id']}}>Edit |</a> <a class="btne" href={{"delete/".$item['id']}}>Hapus</a></td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</body>
</html>