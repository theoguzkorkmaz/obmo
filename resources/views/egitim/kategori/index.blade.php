<h1>Kategori - Index</h1>
@if(count($kategoris) == 0)
  <p>No data</p>  
  @else
    @foreach($kategoris as $kategori)          
      {{$kategori->baslik}}      
      {{$kategori->aciklama}}
      {{$kategori->resim}}             
      {{$kategori->resim_aciklama}}             
      {{$kategori->icon}}             
      <hr>
    @endforeach
@endif