<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dft.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pembayaran</title>
</head>
<body>
  <!-- \\ {{route('simpankas')}} \\ -->
<form action="{{route('simpankas')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="imgcontainer">
    <img src="background/ktpang.png" height="150" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="nis"><b>Nis</b></label><br>
      <tr>
              <td>Pilih NIS : 
                <select name="nis" id="nis">
                    <option disabled value>NIS</option>
                  @foreach ($nis as $item)
                    <option value="{{$item->id}}">{{$item->nis}}</option> 
                  @endforeach
                </select>
              </td>      
       </tr>
            <br><br>

    <label for="harga"><b>Jumlah</b></label><br>
    <select name="harga" id="harga">
      <option value="Rp 5.000">Rp 5.000</option>
      <option value="Rp 10.000">Rp 10.000</option>
      <option value="Rp 15.000">Rp 15.000</option>
      <option value="Rp 20.000">Rp 20.000</option>
      <option value="Rp 25.000">Rp 25.000</option>
      <option value="Rp 30.000">Rp 30.000</option>
      <option value="Rp 35.000">Rp 35.000</option>
      <option value="Rp 40.000">Rp 40.000</option>
      <option value="Rp 45.000">Rp 45.000</option>
      <option value="Rp 50.000">Rp 50.000</option>
    </select><br><br>
    <label for="keterangan"><b>Keterangan :</b></label><br>
    <input type="text" placehorder="Masukan Keterangan Disini" name="keterangan" required><br>

    <button class="btnsub" type="submit">SUBMIT</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="/kas"><button type="button" class="cancelbtn">Kembali</button></a>
  </div>
</form> 
</body>
</html>