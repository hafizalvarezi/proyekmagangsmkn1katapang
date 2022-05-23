<html>
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link href="{{\Illuminate\Support\Facades\URL::asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{\Illuminate\Support\Facades\URL::asset('/css/navbar.css')}}" rel="stylesheet">
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    h2{
            font-family: Snell, Cursive;
            font-size: 25px;
        }
        
    .container{
      position: absolute;
      top: 23%;
      left: 8%;
    }
        </style>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="{{route('user')}}"><img src="../image/logo1.png" height="50"></a>
      </div>
      <ul>
      <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="logout"><a href="{{route('login')}}" style="text-decoration: none;">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
    </svg>
<h6 >Logout</h6>
</a>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 200px;">
        <img src="../image/MenuKopi/Cafe Mocha.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title m-1">Cafe Mocha</h5>
          <p class="card-text">Rp 22.000</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
</div>
      </div>
    </div>

    <div class="back">
      <a href="{{route('shop3')}}">
      <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
      </svg>
      </a>
    </div>
    
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
</body>
</html>