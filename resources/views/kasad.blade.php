<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9d085cb130.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="kasad.css">
    <title>Keuangan Sekolah</title>
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
        <div class="tabel1">
            <table class="adm1" border="1px" align="center" width="700">
                <tr class="tab" align="center">
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>KETERANGAN</th>
                    <th>Tindakan</th>
                </tr>
                @foreach ($data as $item)
                <tr align="center">
                    <td>{{$item->siswa['nis']}}</td>
                    <td>{{$item->siswa['nama']}}</td>
                    <td>{{$item->harga}}</td>
                    <td class="em">{{$item->keterangan}}</td>
                    <td><a href="{{"hapus/".$item['id']}}" class="btne">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        {{ $data->links() }}
    </div>
</body>
</html>