
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layout_admin.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layout_admin.navbar')

  <!-- Main Sidebar Container -->
  @include('layout_admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Upload Gambar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <center>
  <form action="{{route('simpangambar')}}" method ="post" enctype="multipart/form-data"> 
    {{csrf_field() }}
        <table>
            <tr>
                <td>Title :  <input type="text" name="nama" placeholder="Masukan Nama"></td>
            </tr>
            <tr>
                <td>Harga :  <input type="text" name="harga" placeholder="Masukan Harga"></td>
            </tr>
            <tr>
                <td>Gambar :<input type="file" name="gambar" placeholder="Masukan Gambar"></td>
            </tr>
            <td><button type="submit">Simpan</button></td>
  </form>
  </center>
        </div>
      </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layout_admin.script')
</body>
</html>