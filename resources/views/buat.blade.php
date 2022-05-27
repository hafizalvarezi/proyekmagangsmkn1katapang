<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dft.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar</title>
</head>
<body>
<form action="{{route('simpangambar')}}"  method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="imgcontainer">
    <img src="background/ktpang.png" height="150" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  <label for="nuptk"><b>NUPTK</b></label><br>
    <input type="number" placeholder="Masukan NUPTK" name="nuptk" pattern="1234567890" onKeyPress="if(this.value.length==10) return false;" required><br><br>

    <label for="nama"><b>Nama Guru</b></label><br>
    <input type="text" placeholder="Masukkan Nama Guru" id="nama" name="nama" required><br>

    <label for="gambar"><b>Foto Guru</b></label><br>
    <input type="file" id="gambar" name="gambar"  required><br><br>
    
    <label for="mapel"><b>Mata Pelajaran</b></label><br>
    <select name="mapel" id="mapel">
      <option value="">Pilih Mata Pelajaran</option>
      <option value="Kimia">Kimia</option>
      <option value="PKN">Pendidikan Kewarganegaraan</option>
      <option value="Matematika">Matematika</option>
      <option value="Pendidikan Olahraga dan Jasmani">Pendidikan Olahraga dan Jasmani</option>
      <option value="Fisika">Fisika</option>
      <option value="Bahasa Sunda">Bahasa Sunda</option>
      <option value="Bahasa Inggris">Bahasa Inggris</option>
      <option value="Bahasa Indonesia">Bahasa Indonesia</option>
      <option value="Bahasa Jepang">Bahasa Jepang</option>
      <option value="Pemuda Pancasila">Penganturan Parkir</option>
    </select><br><br>

    <button class="btnsub" type="submit">Daftar</button>
  </div>

  <div class="container">
    <a href="/gambar"><button type="button" class="cancelbtn">Kembali</button></a>
  </div>
</form> 
</body>
</html>