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
                        <span class="icon"><i class="fa-solid fa-address-card"></i></i></span>
                        <span class="btn2">&nbsp;Data Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="/set">
                        <span class="icon" class="active"><i class="fa-solid fa-money-bill-1-wave"></i></span>
                        <span class="btn3" >&nbsp; Keuangan</span>
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
                @csrf
                <button type="submit" class="btnlog"><i class="fa-solid fa-right-to-bracket"></i> Log Out</button>
                </form>
            </div>
        </div>
        <div class="huhe">
            <div class="tuing">
                <h1>HALAMAN KEUANGAN</h1>
            </div>
            <a href="{{route('uang')}}"><button type = "button" class="btnlog1">Bayar Sekarang</button></a>
        </div>
        <div class="not">
            <div class="tinot">
                <h2><i class="fa-solid fa-bell"></i> Notifikasi</h2>
            </div>
            <div class="not-1">
            <table class="adm1" border="1px" align="center" width="700">
                <tr align="center">
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>KETERANGAN</th>
                    <th>ADMIN</th>
                </tr>
                @foreach ($data as $item)
                <tr align="center">
                    <td>{{$item->siswa->nis}}</td>
                    <td>{{$item->siswa->nama}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td><a class="btne" href={{"delete/".$item['id']}}>Hapus</a></td>
                </tr>
                @endforeach
                </table>
                <div class="page">
{{ $data->links() }}
</div>
            </div>
        </div>
    </div>
</body>
</html>