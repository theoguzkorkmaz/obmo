<x-egitim_layout :navbars="$navbars">    
  {{-- @php
      print($egitim);
      print('<hr>');
      print($egitmen);
      print('<hr>');
      print($iceriks);
      print('<hr>');
      print($sinavs);
  @endphp --}}

  <div class="">
    <h3 class="baslik">{{$egitim->baslik}}</h3>
    <p><strong>Eğitmen:</strong> {{$egitmen->name}}</p>
    <p><strong>İçerik:</strong> {{$egitmen->icerik}}</p>
    <hr>
    <div class="">
      @foreach ($iceriks as $icerik)
        <div class="mb-4 p-3 rounded" style="border: dashed 3px lightgreen; border-bottom: solid 5px green">
          <h3 class="mb-3">Bölüm {{$icerik->icerik_no}} - {{$icerik->baslik}}</h3>
          <div>
            <p>Başlık: {{$icerik->baslik}}</p>
            <p>Sıra no: #{{$icerik->icerik_no}}</p>
            <a class="btn btn-danger" href="/egitim/icerik_detay/{{$icerik->id}}">İçeriğe git</a>
          </div>
          <div class="">
            @foreach ($sinavs as $sinav)
              @if (($sinav->icerik_no) == ($icerik->icerik_no))
                <p>Başlık: {{$sinav->baslik}}</p>
                <p>Sıra no: #{{$sinav->icerik_no}}</p>
                <a class="btn btn-info" href="/egitim/sinav_detay/{{$sinav->id}}">Sınava git</a>
              @endif     
            @endforeach
          </div>
        </div>
      @endforeach
    </div>    
  </div>

  <div>
    <x-egitim_detay_yorum :yorums="$yorums" :egitim="$egitim" :yorumsay="$yorumsay"></x-egitim_detay_yorum>
  </div>
</x-egitim_layout>