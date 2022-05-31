<!DOCTYPE html>
<html lang="en">
<head>
 <link href="{{\Illuminate\Support\Facades\URL::asset('/css/shop.css')}}" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
</head>
<body>

<x-layout>
<table class="tabel" border="0" cellpadding= "30" cellspacing= "30">
@foreach($dtGambar as $item)
    <tr align="center">
      <td>{{$loop->iteration}}</td>
      <td>
        <img src="{{asset('img/'.$item->gambar)}}" height="150px" width="150px" alt="" srcset="">
      </td>
      <td>{{$item->nama}} </td>
      <td>{{$item->harga}}</td>
      <td>
      <a href="{{url('beli',$item->id)}}" >Beli Produk Ini!</a>
    </td>

</div>
</tr>
@endforeach
</table>
<div class="pagination1">
          {{$dtGambar->links()}}
</x-layout>
        </div>
   <div class="bek">
   <a href="{{route('home')}}"><svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left-square" viewBox="0 0 16 16">
   <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
   <path d="M10.205 12.456A.5.5 0 0 0 10.5 12V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4a.5.5 0 0 0 .537.082z"></path>
   </svg><h6 style="color: white;">Back</h6></a>
</div>
        @include('footer')
</body>
</html>

