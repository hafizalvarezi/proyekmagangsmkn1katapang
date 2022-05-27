<html>

<head>
    <link href="{{\Illuminate\Support\Facades\URL::asset('/css/footer.css')}}" rel="stylesheet">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
</head>

<x-layout>
    <x-slot name="title">Baranda</x-slot>
    <table class="tabel" border="3" cellpadding="3" cellspacing="0">
        <tr align="center">
            <td>No</td>
            <td>Menu</td>
            <td>Harga</td>
        </tr>
        @foreach ($dtmenu as $item)
        <tr>
            <td align="center">{{$loop->iteration}}</td>
            <td>{{$item->Menu}}</td>
            <td align="center">{{$item->Harga}}</td>
        </tr>
        @endforeach
    </table>
</x-layout>
<div class="pagination">
    {{$dtmenu->links()}}
</div>
  <!-- Footer -->
  <div class="footer">
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331;font-size: 12px;top: 654px;width: 1349px;"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: tan">
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Kopi Senja</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: tan; height: 2px"
                />
            <p>
            We have only one obsession: coffee. We are excited to share the pleasure of coffee with you, We are excited to share both with you,
            That's why we created Kopi Senja. Here's a place to drink, meet friends, hangout and
            enjoy an atmosphere away from the hassles of everyday life.
        </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Our Best Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: tan; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Caramel</a>
            </p>
            <p>
              <a href="#!" class="text-white">Cafe Latte</a>
            </p>
            <p>
              <a href="#!" class="text-white">Piccolo</a>
            </p>
            <p>
              <a href="#!" class="text-white">Americano</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Join With Us!</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: tan; height: 2px"
                />
            <p>
              <a href="{{route('registrasi')}}" class="text-white">Register</a>
            </p>
            <p>
              <a href="{{route('shop')}}" class="text-white">Shop</a>
            </p>
            <p>
              <a href="{{route('login')}}" class="text-white">Have an Acoount?</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact Us</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: tan; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Soreang, Bandung, Indonesia</p>
            <p><i class="fas fa-envelope mr-3"></i> info@Kopisenja.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"> © 2022 Copyright:
      <a class="text-white" href="#">Kopisenja.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  </div>
  </html>
</body>
</html>
