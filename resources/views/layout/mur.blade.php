<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List Siswa</title>
</head>
<body>
<img class="title-satu" src="background/title.png" alt="">
    <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-clock fa-xs"></i>
        </label>
        <ul>
            <li><a style="text-decoration:none" href="/dashboard">Home</a></li>
            <li><a style="text-decoration:none" href="/about">About</a></li>
            <li><a style="text-decoration:none" href="/contact">Contact</a></li>
            <li><a style="text-decoration:none" href="/galeri">Galeri</a></li>
            <li><a style="text-decoration:none" class="active" href="/mur">Daftar Siswa</a></li>
        </ul>
    </nav>
    <div class="table">
        <table class="tbl" border="1px" align="center" width="1116">
                <tr align="center">
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Asal Sekolah</td>
                    <td>Jenis Kelamin</td>
                    <td>Jurusan</td>
                    <td>Tanggal Lahir</td>
                </tr>
                @foreach ($dtsiswa as $item)
                <tr align="center">
                    <td>{{$item->nis}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->askol}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->jrs}}</td>
                    <td>{{$item->ttg}} {{$item->bulan}} {{$item->tahun}}</td>
                </tr>
                @endforeach
        </table>
     </div>
</body>
</html>