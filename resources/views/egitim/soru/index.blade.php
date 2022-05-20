<h1>soru - Index</h1>
@if(count($sorus) == 0)
  <p>No data</p>  
  @else
    @foreach($sorus as $soru)          
      {{$soru->sinav_id}}   
      {{$soru->soru_no}}      
      {{$soru->soru}}
      {{$soru->resim}}
      {{$soru->resim_aciklama}}         
      <hr>
    @endforeach
@endif