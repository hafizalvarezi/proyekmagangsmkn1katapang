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
<form action="{{route('simpandaftar')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="imgcontainer">
    <img src="background/ktpang.png" height="150" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="nis"><b>NIS</b></label><br>
    <input type="number" placeholder="Masukan NIS MAX=10" name="nis" pattern="1234567890" onKeyPress="if(this.value.length==10) return false;" required><br><br>
    <label for="nama"><b>Nama</b></label>
    <input type="text" placeholder="Masukan nama Siswa" name="nama" required>

    <label for="jkel"><b>Jenis Kelamin :</b></label><br>
    <input type="radio" name="jkel" value="Laki Laki" id="Laki Laki" >Laki Laki</input><br>
    <input type="radio" name="jkel" value="Perempuan" id="Perempuan" >Perempuan</input><br>
    <br>
    <label for="jrs"><b>Jurusan</b></label><br>
    <select name="jrs" id="jrs" class="categ">
      <option value="Tidak Punya">-- PILIH --</option>
      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
      <option value="MultiMedia">MultiMedia</option>
      <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
    </select>
    <p>Jika tidak punya Jurusan, Bisa dikosongkan saja</p>
    <br>
    <label for="ttg"><b>Tanggal Lahir : </b></label><br>
    <td>
					<select name="ttg" required>
							<option value="">Tanggal</option>
						<?php for( $i = 1; $i <= 31; $i++ ) : ?>
							<option><?= $i; ?></option>
						<?php endfor; ?>
					</select>
					<select name="bulan" required>
						<option value="">Bulan</option>
						<option value="Januari">01</option>
						<option value="Februari">02</option>
						<option value="Maret">03</option>
						<option value="April">04</option>
						<option value="Mei">05</option>
						<option value="Juni">06</option>
						<option value="Juli">07</option>
						<option value="Agustus">08</option>
						<option value="September">09</option>
						<option value="Oktober">10</option>
						<option value="November">11</option>
						<option value="Desember">12</option>

					</select>
                    <select name="tahun" required>
							<option value="">Tahun</option>
						<?php for( $i = 1980; $i <= 2022; $i++ ) : ?>
							<option><?= $i; ?></option>
						<?php endfor; ?>
					</select><br>
    </td><br>

    <button class="btnsub" type="submit">Daftar</button>
  </div>

  <div class="container">
    <a href="/list"><button type="button" class="cancelbtn">Kembali</button></a>
  </div>
</form> 
</body>
</html>