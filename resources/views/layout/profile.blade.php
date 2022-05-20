<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prof.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SMKN 1 KATAPANG</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img class="title-satu" src="background/title.png" alt="">
            <nav>
                <ul>
                    <li><a style="text-decoration:none"  href="/dashboard">Home</a></li>
                    <li><a style="text-decoration:none" href="/about">About</a></li>
                    <li><a style="text-decoration:none" href="/contact">Contact</a></li>
                    <li><a style="text-decoration:none" href="/galeri">Galeri</a></li>
                    <li><a style="text-decoration:none" href="/mur">Daftar Siswa</a></li>
                    <li><a style="text-decoration:none;" class="active" href="/profile">Profile</a></li>
                </ul>
            </nav>
        </div>
        <div class="card">
            <div class="title">
                <h1>Profile {{$data['nama']}} </h1>
            </div>
        </div>
    </div>
</body>
</head>