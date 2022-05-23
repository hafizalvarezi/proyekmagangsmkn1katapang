<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Keuangan</title>
</head>
<body>
  <h1 align="center">EDIT DATA KEUANGAN</h1>
  <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <table align="center" border="10px" cellpadding="10px" width = "50%" cellspacing="0px">
    <tr>
      <td><b>NIS</b>
      <td><select name="nis_id" id="nis_id">
       <option disabled value>NIS</option>
         @foreach ($nis as $item)
           <option value="{{$item->id}}">{{$item->nis}}</option>
         @endforeach
      </select></td>
    </td>
    </tr>
    <tr>
      <td><b>Harga</b>
     <td> <input type="text" placeholder="Rp.XXXXXX" name="harga" value="{{$data->harga}}" required ></td>
    </td>
    </tr>
    <tr>
      <td>
      <b>Keterangan</b>
      <td><input type="text" placehorder="Masukkan Keterangan" name="keterangan" value="{{$data->keterangan}}" required></td>
      </td>
    </tr>
    <tr align="right">
      <td></td>
      <td><button type="submit">Simpan</button>
      <a href="{{route('set')}}"><button type="button" class="cancelbtn">Kembali</button></a>
      </td>
    </tr>
  </table>
  </form>
  
</body>
</html>