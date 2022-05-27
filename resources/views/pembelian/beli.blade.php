<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembelian</title>
</head>
<body>
<center>
    <h2>Pemesanan</h2>

  <form action="{{route('simpan')}}" method ="post"> 
    {{csrf_field() }}
        <table>
            <tr>
                <td>No :  <input type="text" name="uploadgambar_id" value="{{$menu->id}}"></td>
            </tr>
            <tr>
              <td>{{$menu->nama}}</td>
            </tr>
            <tr>
              <td>{{$menu->harga}}</td>
            </tr>
            <tr>
                <td>Nama :<input type="text" name="nama_pembeli" placeholder="Masukan Nama"></td>
            </tr>
            <tr>
                <td>Alamat :<input type="text" name="alamat" placeholder="Masukan Alamat"></td>
            </tr>
            <td><button type="submit">Checkout</button></td>
        </table>
  </form>
  </center>
</body>