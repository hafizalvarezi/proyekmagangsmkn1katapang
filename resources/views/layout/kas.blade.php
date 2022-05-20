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
    <title>Daftar Keuangan</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1 class="tit">HALAMAN DAFTAR KEUANGAN</h1>
        </div>
        <div class="bayar">
            <a href="{{route('uang')}}"><button type = "button" class="tom">Bayar</button></a>
        </div>
        <div class="tabel1">
            <table class="adm1" border="1px" align="center" width="700">
                <tr class="tab" align="center">
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>KETERANGAN</th>
                </tr>
                @foreach ($data as $item)
                <tr align="center">
                    <td>{{$item->muridkas['nis']}}</td>
                    <td>{{$item->muridkas['nama']}}</td>
                    <td>{{$item->harga}}</td>
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