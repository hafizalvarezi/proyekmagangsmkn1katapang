<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dft.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SMKN 1 KATAPANG</title>
</head>
<body>
  <div class="card-body">
    <p class="card-text">
    <form action="{{route('simpankas')}}"  method="post" enctype="multipart/form-data">
  <a style="text-decoration:none" href="https://thohirdev.com"></a>
  {{csrf_field()}}

  <div class="container" align="center">
  <img align =""src="background/ktpang.png" class="card-img-top" alt="..." style="width: 150px"><br><br> 
  <div class="card" style="width: 450px" height="200px" >
  <h4 class="card-title" align="center"><b>Formulir Pembayaran</b></h4><br>
    <label for="siswa_id" align="left"><b>*Pilih NIS =></b>
                <select name="siswa_id" id="siswa_id">
                    <option disabled value>NIS</option>
                  @foreach ($nis as $item)
                    <option value="{{$item->id}}">{{$item->nis}}</option>
                  @endforeach
                </select>
    </label><br>

    <label for="harga" align="left"><b>*Nominal</b></label>
    <input type="text" placeholder="Rp.XXXXXX" name="harga" required><br>
    
    <label for="keterangan" align="left"><b>*Keterangan</b></label>
    <input type="text" placehorder="Masukkan Keterangan" name="keterangan" required><br>
 
    <button class="btnsub" type="submit" align="center">SUBMIT </button>
</td>
  </div>
</div>
<div class="kem">
    <a href="set"><button type="button" class="cancelbtn">Kembali</button></a>
    </div>
</form>
</div>
</head>
</html>