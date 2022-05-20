<h1>Yorum - Index</h1>
@if(count($yorums) == 0)
  <p>No data</p>  
  @else
    @foreach($yorums as $yorum)          
      {{$yorum->haber_id}}
      {{$yorum->user_id}}
      {{$yorum->baslik}}
      {{$yorum->icerik}}
      {{$yorum->onay}}             
      <hr>
    @endforeach
@endif