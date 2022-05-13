<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>List Data Siswa</title>
</head>
<body>
    <form action="">
        <div class="container">
            <div class="nav">
            <h1>Halaman List Data Siswa</h1>
            <a href="{{route('daftar')}}"><button type="button" class="btn">Daftarkan Siswa</button></a>
            </div>
        </div>
        <div class="table">
        <table class="tbl" border="1px" align="center" width="700">
                <tr align="center">
                    <td>ID</td>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Asal Sekolah</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>
                    <td>Admin</td>
                </tr>
                @foreach ($dtsiswa as $item)
                <tr align="center">
                    <td>{{$item['id']}}</td>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->askol}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->ttg}} {{$item->bulan}} {{$item->tahun}}</td>
                    <td><a href={{"edit/".$item['id']}}>Edit |</a> <a href={{"delete/".$item['id']}}>Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </form>
    <div class="off">
        <h3>Kembali ke Halaman Admin <a href="/admin">DISINI</a></h3>
    </div>
</body>
</html>