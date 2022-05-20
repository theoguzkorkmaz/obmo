<h1>sinav - Index</h1>
@if(count($sinavs) == 0)
  <p>No data</p>  
  @else
    @foreach($sinavs as $sinav)          
      {{$sinav->sinav_id}}      
      {{$sinav->baslik}}
      {{$sinav->aciklama}}         
      <hr>
    @endforeach
@endif