<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
<link href="{{\Illuminate\Support\Facades\URL::asset('/css/navbar.css')}}" rel="stylesheet">
<link href="{{\Illuminate\Support\Facades\URL::asset('/css/app.css')}}" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>

<body>

<header>
  <!-- Navbar -->
  <div id="abc">
    <nav>
        <div class="logo">
      <a href="{{route('user')}}">
      <img src="../image/logo1.png" height="50"/>
    </a>
      </div>
        <ul>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('registrasi')}}">Join Now</a></li>
        </ul>
    </nav>
{{$slot}}
</div>
  <!-- Navbar -->
</body>
</header>
