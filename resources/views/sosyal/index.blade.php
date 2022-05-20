<h1>Haber - Index</h1>
@if(count($sosyals) == 0)
  <p>No data</p>  
  @else
    @foreach($sosyals as $sosyal)          
      {{$sosyal->ad}}
      {{$sosyal->icon}}
      {{$sosyal->link}}
      {{$sosyal->aciklama}}
      {{$sosyal->aktiflik}}             
      <hr>
    @endforeach
@endif