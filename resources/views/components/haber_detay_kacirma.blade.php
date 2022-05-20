@props(['kacirmas'])

<div class="sticky-md-top in">          
  <h2 class="baslik">
    Bu haberleri kaçırmayın
  </h2>
  <div class="box">
      @php
        $i=1;              
      @endphp
      @if (count($kacirmas) != 0)
        @foreach ($kacirmas as $kacirma)        
          <li class="list-group-item d-flex flex-row gap-3">
            <span>
              {{$i}}
            </span>
            <a href="/haber/haber_detay/{{$kacirma->id}}">
              {{Str::limit($kacirma->baslik, 70)}}
            </a>
          </li>
          @php
            $i++;              
          @endphp     
        @endforeach
      @else
        <p>Bu haberleri kaçırmayın kısmı yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
      @endif        
  </div> <!-- bu haberleri kaçırmayın -->

  <x-haber_detay_bulten></x-haber_detay_bulten>

</div><!-- /bu haberleeri kaçırmayın ve abone bülteni-->