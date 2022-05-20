<h1>Haber - Index</h1>
@if(count($habers) == 0)
  <p>No data</p>  
  @else
    @foreach($habers as $haber)          
      {{$haber->baslik}}
      {{$haber->kategori_id}}
      {{$haber->icerik}}
      {{$haber->aciklama}}
      {{$haber->resim}}             
      <hr>
    @endforeach
@endif