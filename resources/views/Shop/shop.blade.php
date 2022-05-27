<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <style>
  .pagination {
    position: fixed;
    top: 85%;
    left: 20%;
}
    </style>
</head>
<body>
<table border="0" cellpadding= "30" cellspacing= "15">
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
<div class="pagination">
          {{$dtGambar->links()}}
        </div>
</body>
</html>
 
