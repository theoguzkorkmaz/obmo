@props(['haber'])
@props(['yazar'])

@if ($haber)
  <div class="container p-md-0" id="haber_header">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" title="Anasayfa">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="/haber/kategori_detay/{{$haber->id}}">{{$haber->ad}}</a></li>
        <li class="breadcrumb-item">
          {!! substr(strip_tags($haber->baslik), 0, 70) !!}
        </li>
      </ol>
    </nav>

    <h1 class="baslik">{!! $haber->baslik !!}</h1>    
    
    <p class="mini-icerik">{!! substr(strip_tags($haber->icerik), 0, 120) !!}...</p>

    <p class="yazar-tarih">
      <a class="ad">
        {{$yazar->name}}
      </a> 
      tarafından | <span class="tarih">{{$haber->tarih}}</span> tarihinde paylaşıldı.
    </p>

    <x-haber_paylas :haber="$haber"></x-haber_paylas>
  </div><!-- /haber_header --> 
@else
  <div class="container p-md-0" id="haber_header">
    <p>Haber başlığı yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
  </div>
@endif