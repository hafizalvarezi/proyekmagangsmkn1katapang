<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{route('update',$dtupload->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <label for="jenis">Pilih Jenis Hewan</label>
    <input list="jeniss" value="{{$dtupload ['jenis']}}" name="jenis" id="jenis">
    <datalist id="jeniss">
      <option value="Kucing">
      <option value="Anjing">
      <option value="Burung">
    </datalist>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" placeholder="Masukan Harga" value="{{$dtupload ['harga']}}" required>
        <label for="deskripsi">Keterangan</label>
        <input type="text" id="deskripsi" placeholder="Masukan Keterangan" name="deskripsi" value="{{$dtupload ['deskripsi']}}" required>
        <label for="foto">Foto</label>
        <input type="file" class="form-control" id="foto" placeholder="Masukan Foto Hewan" name="foto" value="{{$dtupload ['foto']}}" required>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{route('home')}}">Kembali</a>
</body>
</html>