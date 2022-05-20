<h1>İçerik - Index</h1>
@if(count($iceriks) == 0)
  <p>No data</p>  
  @else
    @foreach($iceriks as $icerik)          
      {{$icerik->egitim_id}}      
      {{$icerik->icerik_no}}
      {{$icerik->baslik}}             
      {{$icerik->aciklama}}             
      {{$icerik->puan}}             
      <hr>
    @endforeach
@endif