<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin | Pet's Paradise</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link href="../assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">

            <nav class="navbar top-navbar navbar-expand-md navbar-dark">

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav">
                        <!-- User profile and search -->
                    </ul>
                </div>
            </nav>
        </header>
                <!-- Sidebar navigation-->
                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <ul id="sidebarnav">
                          <!-- User Profile-->
                        <li class="sidebar-item selected"> <a class="sidebar-link waves-effect waves-dark sidebar-link active"
                            href="{{route('dashboard')}}" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('contact')}}" aria-expanded="false">
                            <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                class="hide-menu">Contact Us</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('home')}}" aria-expanded="false"><i class="me-3 fa fa-table"
                                aria-hidden="true"></i><span class="hide-menu">Daftar Hewan</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('maps')}}" aria-expanded="false"><i class="me-3 fa fa-globe"
                                aria-hidden="true"></i><span class="hide-menu">Google Map</span></a></li>
                </ul>
                </nav>
            </div>
                <!-- End Sidebar navigation -->
            </div>
        <!-- Page wrapper  -->
        <div id="main">
            <a href="#"class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></a>  
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                    </div>

                    <div class="col-md-6 col-4 align-self-center">
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Daftar Hewan</h4>   
                                <table class="table">
                                    <tr>
                                      <td>Foto Hewan</td>
                                      <td>Jenis Hewan</td>
                                      <td>Harga Hewan</td>
                                      <td>Deskripsi Hewan</td>
                                    </tr>
                                    <tr>
                                      <td><img src="../image/dog.jpg" width="80px" height="80px" alt="not found" srcset=""></td>
                                      <td>Burung</td>
                                      <td>Rp.20000001</td>
                                      <td>oke dek ok</td>
                                    </tr>
                                  </table>
                                  <div class="selengkapnya"> 
                                  <a href="{{route('home')}}">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Message</h4>
                                <table class="table">
                                    <tr>
                                      <td>No</td>
                                      <td>Nama</td>
                                      <td>No.Telp</td>
                                      <td>Pesan</td>
                                      <td>Date</td>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td>Munggar</td>
                                      <td>089747632683</td>
                                      <td>Sering sering mandi ya</td>
                                      <td>17 Agustus 1995</td>
                                    </tr>
                                  </table>
                                  <div class="selengkapnya"> 
                                  <a href="{{route('contact')}}">Lihat Selengkapnya</a></div>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Daftar Pembeli</h4>
                                    <div class="col-md-2 ms-auto">
                                        <select class="form-select shadow-none col-md-2 ml-auto">
                                            <option selected>January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                            <option value="4">Mei</option>
                                            <option value="5">Juni</option>
                                            <option value="6">Juli</option>
                                            <option value="7">Agustus</option>
                                            <option value="8">September</option>
                                            <option value="9">Oktober</option>
                                            <option value="10">November</option>
                                            <option value="11">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0" colspan="2">Nama Pembeli</th>
                                                <th class="border-top-0">Jenis Hewan</th>
                                                <th class="border-top-0">Pemasukan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">S</span></td>
                                                <td class="align-middle">
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                                </td>
                                                <td class="align-middle">Elite Admin</td>
                                                <td class="align-middle">$3.9K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
            <!-- footer -->
            <footer class="footer text-center">
                © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        </script>
</body>

</html>