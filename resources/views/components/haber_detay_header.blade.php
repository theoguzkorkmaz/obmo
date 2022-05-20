@props(['haber'])

@if ($haber)
  <div class="container p-md-0" id="haber_header">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" title="Anasayfa">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="/haber/kategori_detay/{{$haber->id}}">{{$haber->ad}}</a></li>
        <li class="breadcrumb-item">
          {{$haber->baslik}}
        </li>
      </ol>
    </nav>

    <h1 class="baslik">{{$haber->baslik}}</h1>    
    
    <p class="mini-icerik">{{Str::limit($haber->icerik, 120)}}</p>

    <p class="yazar-tarih">
      <a class="ad" href="$">Y A Z A R</a> tarafından | <span class="tarih">{{$haber->created_at->diffForHumans()}}</span> paylaşıldı.
    </p>

    <x-haber_paylas></x-haber_paylas>
  </div><!-- /haber_header --> 
@else
  <div class="container p-md-0" id="haber_header">
    <p>Haber başlığı yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
  </div>
@endif