<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dft.css">
    <link rel="stylesheet" href="foot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/9d085cb130.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>SMKN 1 KATAPANG</title>
</head>
<body>
<img class="title-satu" src="background/title.png" alt="">
    <nav>
        <ul>
            <li><a style="text-decoration:none" href="/dashboard">Home</a></li>
            <li><a style="text-decoration:none" href="/about">About</a></li>
            <li><a style="text-decoration:none" class="active" href="/contact">Contact</a></li>
            <li><a style="text-decoration:none" href="/galeri">Galeri</a></li>
            <li><a style="text-decoration:none" href="/mur">Daftar Siswa</a></li>
            <li><a style="text-decoration:none;" class="pro" href="/kas">Info Pembayaran</a></li>
        </ul>
    </nav>
  <div class="card-body">
    <p class="card-text">
  <form action="{{route('simpanpesan')}}" method="post" enctype="multipart/form-data">
    <a style="text-decoration:none" href="https://thohirdev.com"></a>
    {{csrf_field()}}

    <div class="container" align="center">
      <img align =""src="background/ktpang.png" class="card-img-top" alt="..." style="width: 210px" height="200px"><br><br> 
      <div class="card" style="width: 450px" height="200px" >
          <h5 class="card-title" align="center">Contact Us</h5>
          <h6 align="center">Gunakan formulir ini untuk menghubungi kami. Beri tahu kami melalui pertanyaan, saran, dan masalah Anda dengan mengisi formulir kontak di bawah ini.</h6>
          <label for="namleng" align="left"><b>Nama Lengkap*</b></label>
          <input type="text" name="namleng" required>

          <label for="kls" align="left"><b>Kelas/Guru Mapel*</b> (Contoh Kelas : 11RPL2)</label>
          <input type="text" name="kls" required>

          <label for="email" align="left"><b>Email*</b></label>
          <input type="text" name="email" required>
          
          <label for="pesan" align="left"><b>Pesan*</b></label>
          <input type="text" name="pesan" required>
      
          <button class="btnsub" type="submit" align="center">SUBMIT </button>  
      </div>
      <div class="sosmed">
        <a href="https://www.facebook.com/smkn1katapang.sch/" class="fb"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/smkn1katapang/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://twitter.com/smkn1katapang"><i class="fa-brands fa-twitter-square"></i></a>
      </div>
    </div>
  </form>


<!-- Footer -->

<div class="footer">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col">
    <img align =""src="background/ktpang.png" class="card-img-top" alt="..." style="width: 85px" height="85px">
      <p class="teks3">&copy; 2022-26-04</p> 
    </div>

    <div class="col">
      <h5>Site map</h5>
      <ul class="nav flex-column">
        <li class="teks2"><a href="#" class="teks">About</a></li>
        <li class="teks2"><a href="#" class="teks">Kompetensi</a></li>
        <li class="teks2"><a href="#" class="teks">Covid-19</a></li>
        <li class="teks2"><a href="#" class="teks">Login</a></li>
        <li class="teks2"><a href="#" class="teks">Terms</a></li>
        <li class="teks2"><a href="#" class="teks">Privacy Policy</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Resources</h5>
      <ul class="nav flex-column">
        <li class="teks2"><a href="#" class="teks">Bantuan</a></li>
        <li class="teks2"><a href="#" class="teks">Blog</a></li>
        <li class="teks2"><a href="#" class="teks">Forums</a></li>
        <li class="teks2"><a href="#" class="teks">FAQs</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Locate Us</h5>
      <ul class="nav flex-column">
        <li class="teks2"><a href="#" class="teks">Petunjuk</a></li>
        <li class="teks2"><a href="#" class="teks">Map</a></li>
        <li class="teks2"><a href="#" class="teks">Telepon</a></li>
      </ul>
    </div>

    <div class="col">
      <h3><b>SMKN 1 KATAPANG</b></h3>
      <ul class="nav flex-column">
        <li>Sekolah Menengah Kejuruan Negeri di Lingkungan Dinas Pendidikan Provinsi Jawa Barat</li>
      </ul>
    </div>
  </footer>
</div>
</head>
</html>