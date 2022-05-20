<h1>yorum - Index</h1>
@if(count($yorums) == 0)
  <p>No data</p>  
  @else
    @foreach($yorums as $yorum)          
      {{$yorum->egitim_id}}   
      {{$yorum->kullanici_id}}      
      {{$yorum->baslik}}
      {{$yorum->icerik}}         
      <hr>
    @endforeach
@endif