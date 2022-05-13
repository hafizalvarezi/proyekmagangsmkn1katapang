<x-layout>
    <x-slot name="title">Baranda</x-slot>

    <div class="center">
    <table class="tabel" width="450px" style="background-color: black;" border="3" cellpadding= "3" cellspacing= "0">
    
    <tr align="center">     
      <td>No Kopi</td>
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

      </div>
      <div class="pagination">
    {{$dtmenu->links()}}
      </div>
</x-layout>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>