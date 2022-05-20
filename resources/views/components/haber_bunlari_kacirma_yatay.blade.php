@props(['kacirmas'])

<div class="container p-md-0" id="bunlari-kacirma">
  <h2 class="baslik">
    Bu haberleri kaçırmayın
  </h2>
  <div class="box">
    <ul class="list-group">      
      @php
        $i=1;              
      @endphp
      @if (count($kacirmas) != 0)
        @foreach ($kacirmas as $kacirma)        
          <li class="list-group-item d-flex flex-row gap-3">
            <span>
              {{$i}}
            </span>
            <a href="/haber/haber_detay/{{$kacirma->id}}" title="{{Str::limit($kacirma->baslik, 70)}}">
              {{Str::limit($kacirma->baslik, 70)}}
            </a>
          </li>
          @php
            $i++;              
          @endphp     
        @endforeach
      @else
          <p>Haberler yüklenemedi, lütfen daha sonra deneyin!</p>
      @endif         
    </ul>
  </div>
</div><!-- bunlari-kacirma -->