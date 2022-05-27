<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9d085cb130.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="guru.css">
    <link rel="icon" href="/background/ktpang.png" />
    <title>Daftar Guru</title>
</head>
<body>
<div class="container">
<img class="title-satu" src="background/title.png" alt="">
    <nav class="navbar">
        <ul>
            <li><a style="text-decoration:none;" href="/dashboard">Home</a></li>
            <li><a style="text-decoration:none;" href="/about">About</a></li>
            <li><a style="text-decoration:none;" href="/contact">Contact</a></li>
            <li><a style="text-decoration:none;" href="/galeri">Galeri</a></li>
            <li><a style="text-decoration:none;" href="/mur">Daftar Siswa</a></li>
            <li><a style="text-decoration:none;" class="active" href="/guru">Guru</a></li>
            <li><a style="text-decoration:none;" class="pro" href="/kas">Info Pembayaran</a></li>
        </ul>
    </nav>
        <div class="card">
            <div class="tbl">
            <table class="tbl1" border="1px" align="center" width="700">
            <thead class="table-dark">
                <tr align="center">
                    <th>NO</th>
                    <th>PROFIL</th>
                    <th>NUPTK</th>
                    <th>NAMA GURU</th>
                    <th>MATA PELAJARAN</th>
                </tr>
                </thead>
                @foreach($dataGambar as $item)
                <tr align="center">
                    <td>{{$loop->iteration}}</td>
                    <td>
                    <img src="{{asset ( 'image/'.$item->gambar) }}" height="100px" width="80px" alt="not found" srcset="">
                    </td>
                    <td>{{$item->nuptk}}</td>
                    <td>{{$item->nama}}</td>  
                    <td>{{$item->mapel}}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="page">
      {{ $dataGambar->links() }}
    </div>
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
                    <li class="teks2"><a href="/about" class="teks">About</a></li>
                    <li class="teks2"><a href="/galeri" class="teks">Kompetensi</a></li>
                    <li class="teks2"><a href="https://covid19.go.id/" class="teks">Covid-19</a></li>
                    <li class="teks2"><a href="https://scontent.fbdo7-1.fna.fbcdn.net/v/t39.30808-6/252891551_181959850805461_929039987220388319_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=4TcwMTUsEzgAX9APSOV&_nc_ht=scontent.fbdo7-1.fna&oh=00_AT_RZLUgCMap-iKcil_Jf8OvNiNlhcap4jmh290nRcZXeA&oe=62911E96" class="teks">Terms</a></li>
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
                    <li class="teks2"><a href="http://assets.kompasiana.com/items/album/2016/06/22/pointing-576a1dfdb29273b106dea054.jpg?t=o&v=770" class="teks">Petunjuk</a></li>
                    <li class="teks2"><a href="https://goo.gl/maps/deov6BewmWUjZWpy5" class="teks">Map</a></li>
                    <li class="teks2"><a href="https://call2friends.com/free-calls" class="teks">Telepon</a></li>
                </ul>
            </div>
    </div>
  </footer>
</body>
</html>