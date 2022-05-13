<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Edit Data Siswa</title>
</head>
<body>
    <div class="container">
        <div class="menu">
        <h1>EDIT DATA SISWA</h1>
            <div class="card">
                <form action="/edit" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <label for=""><b>NIS</b></label> <br>
                    <input type="number" placeholder="NIS" name="nis" pattern="1234567890" onKeyPress="if(this.value.length==10) return false;" value="{{$data['nis']}}"> <br> <br>
                    <label for=""><b>NAMA</b></label> <br>
                    <input type="text" placeholder="Nama" name="nama" value="{{$data['nama']}}"> <br> <br>
                    <label for=""><b>ASAL SEKOLAH</b></label> <br>
                    <input type="text" placeholder="Asal Sekolah" name="askol" value="{{$data['askol']}}"> <br> <br>
                    <label for="jrs"><b>Jurusan</b></label><br>
                    <select name="jrs" id="jrs" class="categ">
                    <option value="">{{$data['jrs']}}</option>
                    <option value="Tidak Punya">Tidak Punya</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="MultiMedia">MultiMedia</option>
                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                    </select>
                    <br><br>
                    <label for="ttg"><b>Tanggal Lahir</b></label><br>
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
					</select>
                    <br><br>
                    <button type="submit">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html> 