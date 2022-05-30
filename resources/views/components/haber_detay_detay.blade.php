@props(['haber'])
@props(['yazar'])

<div id="detay_haber">  
  @if ($haber)       
    {!! $haber->icerik !!}     
  @else
    <p>Haber detay yüklenemedi, lütfen daha sonra tekrar deneyiniz.</p>  
  @endif  
</div><!-- /detay-haber --> 