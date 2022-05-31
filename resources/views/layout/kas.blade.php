<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="kas.css">
    <link rel="icon" href="/background/ktpang.png" />
    <title>Info Pembayaran</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1 class="tit">HALAMAN DATA KAS SEKOLAH 2022</h1>
            <h2 class="tit2">*DATA AKAN DIRISET SETAHUN SEKALI*</h2>
        </div>
        <div class="tabel1">
            <table class="adm1" border="1px" align="center" width="700">
                <tr class="tab" align="center">
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>KETERANGAN</th>git
                </tr>
                @foreach ($data as $item)
                <tr align="center">
                    <td>{{$item->siswa->nis}}</td>
                    <td>{{$item->siswa->nama}}</td>
                    <td>RP {{$item->harga}}</td>
                    <td class="em">{{$item->keterangan}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        {{ $data->links() }}
        <div class="back1">
            <a href="/dashboard"><button type="button" class="back">Kembali</button></a>
        </div>
    </div>
</body>
</html>