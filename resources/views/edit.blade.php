<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>
    <h1 align = "center"><b>EDIT DATA SISWA</b></h1>
    <form action="/edit" method="POST">
        {{csrf_field()}}
    <table align="center" border="10px" cellpadding="10px" width = "50%" cellspacing="0px">
        <tr>
            <td><b>NIS</b>
        <td> <input type="hidden" name="id" value="{{$data['id']}}">
            <input type="number" placeholder="NIS" name="nis" pattern="1234567890" onKeyPress="if(this.value.length==10) return false;" value="{{$data['nis']}}"></td>
        </td>
        </tr>
        <tr>
            <td><b>NAMA</b></td>
            <td><input type="text" placeholder="Nama" name="nama" value="{{$data['nama']}}"> </td>
        </tr>
        <tr>
            <td><b>JURUSAN</b></td>
            <td> <select name="jrs" id="jrs" class="categ">
            <option value="">{{$data['jrs']}}</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="MultiMedia">MultiMedia</option>
            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
            </select>        
        </td>     
        </tr>
        <tr>
            <td><b>TANGGAL LAHIR</b></td>
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
					</select></td>
        </tr>
        <tr>
            <td></td>
            <td align = "right" ><button type="submit">UPDATE</button>
            <a href="/list"><button type="button" class="cancelbtn">KEMBALI</button></a>
        </td>
        </tr>
</table>
    </form>
</body>
</html>