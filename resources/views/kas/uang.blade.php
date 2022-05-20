<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dft.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Uang Kas</title>
</head>
<body>
<form action="{{route('simpankas')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="imgcontainer">
    <img src="background/ktpang.png" height="150" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="nis_id"><b>Pilih NIS =></b>
                <select name="nis_id" id="nis_id">
                    <option disabled value>NIS</option>
                  @foreach ($nis as $item)
                    <option value="{{$item->id}}">{{$item->nis}}</option>
                  @endforeach
                </select>
    </label>
                
                <br><br>

    <label for="harga"><b>Harga</b></label><br>
    <input type="text" placeholder="Rp.XXXXXX" name="harga" required><br><br>

    <label for="keterangan"><b>Keterangan :</b></label><br>
    <input type="text" placehorder="-" name="keterangan" required><br>

    <button class="btnsub" type="submit">SUBMIT</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="set"><button type="button" class="cancelbtn">Kembali</button></a>
  </div>
</form> 
</body>
</html>