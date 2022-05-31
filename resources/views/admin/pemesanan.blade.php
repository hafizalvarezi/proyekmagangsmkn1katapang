
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('layout_admin.head')
    <style>
  .pagination {
    position: fixed;
    top: 80%;
    left: 20%;
}
.tambah {
    position: fixed;
    top: 20%;
    left: 90%;
}
    </style>
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
            <h1 class="m-0">Data Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Pesanan</li>
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
        <table align="center" border="10" cellpadding= "5" cellspacing= "0">
    <tr align="center">     
      <td>Id</td>
      <td>Status</td>
      <td>Nama</td>
      <td>Alamat</td>
      <td>Menu</td>
      <td>Harga</td>
      <td>Status</td>
    </tr>   
      @foreach ($dtbeli as $item)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>
        @if ($item->status == 1)
        <a href="{{url('status',$item->id)}}">Telah Dikirim</a>
        @else
        <a href="{{url('status',$item->id)}}">Batal</a>
        @endif
      </td>
      <td>{{$item->nama_pembeli}}</td>
      <td>{{$item->alamat}}</td>
      <td>{{$item->uploadgambar['nama']}}</td>
      <td>{{$item->uploadgambar['harga']}}</td>   
      <td><label>{{ ($item->status == 1) ? 'Belum Dikirim' : 'Selesai'}}</label></td>
    </tr>
      @endforeach
  </table>  

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
