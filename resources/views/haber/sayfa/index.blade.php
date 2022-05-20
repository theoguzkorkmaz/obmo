<h1>Sayfa - Index</h1>
@if(count($sayfas) == 0)
  <p>No data</p>  
  @else
    @foreach($sayfas as $sayfa)          
      {{$sayfa->ad}}
      {{$sayfa->icerik}}
      {{$sayfa->resim}}                   
      <hr>
    @endforeach
@endif