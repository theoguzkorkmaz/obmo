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

  <div id="egitim_icerik">    
    <h3 class="baslik">{{$egitim->baslik}}</h3>
    
    <div class="row g-2">
      @foreach ($iceriks as $icerik)
        <div class="col-md-6 col-xs-12 col-12 p-2 py-3">
          <div class="card p-4">
            <h3 class="card-title baslik">Bölüm {{$icerik->icerik_no}} - {{$icerik->baslik}}</h3>
            <div class="iceriks">
              <h6 class="baslik">İçerik #{{$icerik->icerik_no}}</h6>
              <table class="table table-bordered my-2">              
                <tr>
                  <td class="w-25">
                    <strong>Başlık:</strong>
                  </td>
                  <td class="w-75">{{$icerik->baslik}}</td>
                </tr>
                <td>
                  <strong>Açıklama:</strong>
                </td>                
                <td>{!! substr(strip_tags($icerik->aciklama), 0, 130) !!}...</td>
              </tr>
              <tr>
                <td class="w-25">
                  <strong>Puan:</strong>
                </td>
                <td class="w-75">{{$icerik->puan}}</td>
              </tr>
              <tr>
                <td colspan="2">
                  <a class="btn btn-ozel w-50 mx-auto" href="/egitim/icerik_detay/{{$icerik->id}}">
                    <i class="fas fa-code"></i> İçeriğe git
                  </a>
                </td>
              </tr>
              </table>                                               
            </div>
            <div class="sinavs">
              
              @foreach ($sinavs as $sinav)
                @if (($sinav->icerik_no) == ($icerik->icerik_no))                                                
                  <h6 class="baslik my-3">İçerik #{{$icerik->icerik_no}}'nin sınavı:</h6>
                  <table class="table table-bordered">              
                    <tr>
                      <td class="w-25">
                        <strong>Başlık:</strong>
                      </td>
                      <td class="w-75">{{$sinav->baslik}}</td>
                    </tr>
                    <td>
                      <strong>Açıklama:</strong>
                    </td>
                    <td>{{$sinav->aciklama}}</td>
                  </tr>
                  <tr>
                    <td class="w-25">
                      <strong>Puan:</strong>
                    </td>
                    <td class="w-75">{{$sinav->puan}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <a class="btn btn-ozel2 w-50 mx-auto" href="/egitim/sinav_detay/{{$sinav->id}}">
                        <i class="fas fa-exclamation    "></i>
                        Sınava git
                      </a>
                    </td>
                  </tr>
                  </table>
                @endif     
              @endforeach
            </div>
          </div>
        </div>
      @endforeach
    </div>    
  </div>

  <div>
    <x-egitim_detay_yorum :yorums="$yorums" :egitim="$egitim" :yorumsay="$yorumsay"></x-egitim_detay_yorum>
  </div>

  <div id="egitim_icerik_egitmen">
    <table class="table table-bordered">
      <tr>
        <td>
          <strong>Eğitmen:</strong>
        </td>
        <td>
          {{$egitmen->name}}
        </td>
      </tr>
      <tr>
        <td>
          <strong>İçerik:</strong>
        </td>
        <td>
          {{$egitmen->icerik}}
        </td>
      </tr>
      <tr>
        <td>
          <strong>Olusturulma:</strong>
        </td>
        <td>
          {{$egitmen->created_at->diffForHumans()}}
        </td>
      </tr>      
    </table>
  </div>
</x-egitim_layout>