<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9d085cb130.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <title>Komentar</title>
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
                        <span class="icon"><i class="fa-solid fa-address-card"></i></i></span>
                        <span class="btn2">&nbsp;  Data Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="/kasad">
                        <span class="icon"><i class="fa-solid fa-coins"></i></i></span>
                        <span class="btn3">&nbsp; Kas Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="/komentar">
                        <span class="icon"><i class="fa-solid fa-comment"></i></span>
                        <span class="btn3">&nbsp; Contact</span>
                    </a>
                </li>
                <li>
                    <a href="/gurued">
                        <span class="icon"><i class="fa-solid fa-chalkboard-user"></i></span>
                        <span class="btn3">&nbsp;Data Guru</span>
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
                <h1>HALAMAN Contact/Pesan</h1>
            </div>
        </div>
        <div class="not">
            <div class="tinot">
                <h2><i class="fa-solid fa-bell"></i> Notifikasi</h2>
            </div>
            <div class="not-1">
            <table class="adm1" border="1px" align="center" width="700">
                <tr align="center">
                    <th>NAMA</th>
                    <th>KELAS/GURU MAPEL</th>
                    <th>EMAIL</th>
                    <th>PESAN</th>
                </tr>
                @foreach ($dtsiswa as $item)
                <tr align="center">
                    <td>{{$item->namleng}}</td>
                    <td>{{$item->kls}}</td>
                    <td class="em">{{$item->email}}</td>
                    <td class="tb1">{{$item->pesan}}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="page">
{{ $dtsiswa->links() }}
        </div>
</body>
</html>