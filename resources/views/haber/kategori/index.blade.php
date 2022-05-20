<h1>Kategori - Index</h1>
@if(count($kategories) == 0)
  <p>No data</p>  
  @else
    @foreach($kategories as $kategori)          
      {{$kategori->ad}}
      {{$kategori->link}}
      {{$kategori->aciklama}}
      {{$kategori->yer}}             
      <hr>
    @endforeach
@endif