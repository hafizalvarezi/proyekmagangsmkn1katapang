<!DOCTYPE html>
<html lang="en">
<head>
  <link href="{{\Illuminate\Support\Facades\URL::asset('/css/shop.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
</head>
<style>
    .pagination {
    position: absolute;
    top: 50px;
    left: 50px;
}
body{
background-image: url(../image/bg-web.jpg);
color: white;
}
.tabel{
    position: absolute;
    color: white;
}

</style>
<body>
<x-layout>
<table class="tabel" border="0" cellpadding= "30" cellspacing= "15">
@foreach($dtGambar as $item)
    <tr align="center">
      <td>{{$loop->iteration}}</td>
      <td>
        <img src="{{asset('img/'.$item->gambar)}}" height="150px" width="150px" alt="" srcset="">
      </td>
      <td> {{$item->nama}} </td>
      <td>{{$item->harga}}</td>
      <td>
      <a href="{{url('beli',$item->id)}}" >Beli</a>
      </td>
</tr>
@endforeach
</table>
</x-layout>

<div class="pagination">
          {{$dtGambar->links()}}
        </div>

        @include('footer')
</body>
</html>

