<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>SMKN 1 KATAPANG</title>
</head>
<body>
<img class="title-satu" src="background/title.png" alt="">
    <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-clock fa-xs"></i>
        </label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/galeri">Galeri</a></li>
        </ul>
    </nav>
    <div class="slider">
        <div class="load">

        </div>
    </div>
    <section>
    <table class="tbl" border="1px" align="center" width="700">
                <tr align="center">
                    <td>ID</td>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Asal Sekolah</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>
                </tr>
                @foreach ($dtsiswa as $item)
                <tr align="center">
                    <td>{{$item['id']}}</td>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->askol}}</td>
                    <td>{{$item->jkel}}</td>
                    <td>{{$item->ttg}} {{$item->bulan}} {{$item->tahun}}</td>
                </tr>
                @endforeach
            </table>
    </section>
</body>
</html>