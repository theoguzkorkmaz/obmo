<div class="container p-0 w-full" id="anasayfa-derslerim">            
  <div class="row">
    <div class="col-md-9 col-12" id="derslerim">
      <div>
        <div class="baslik">
          <h3 class="baslik">Kayıtlı derslerim:</h3>
          <p>{{count($egitims)}} adet dersiniz bulunmaktadır.</p>
        </div><!-- /baslik -->
        <div class="row row-cols-1 row-cols-md-3 g-3" id="content">
          @if (count($egitims) != 0)
          @foreach ($egitims as $item)            
            <div class="col">
              <a class="card" href="/egitim/egitim_detay/{{$item->id}}">                
                <img src="{{$item->resim ? asset('storage/'.$item->resim) : asset('/images/no-image.png')}}" class="card-img-top" alt="{{Str::limit($item->baslik, 30)}}" title="{{Str::limit($item->baslik, 30)}}">
                <div class="card-body">
                  <h5 class="card-title">{{$item->baslik}}</h5>                        
                  <p>Kalan: <span>3/9 bölüm</span></p>
                  <p>Harcanan zaman: <span>12:00:00</span></p>
                  <p>Başarı yüzdesi: <span>30%</span></p>                      
                </div>
              </a>
            </div>
          @endforeach   
          @else
            <p>Eğitimlere ulaşamadık, lütfen daha sonra tekrar deneyiniz!</p>
          @endif
        </div><!-- /content -->
      </div>
    </div>
    <div class="col-md-3 col-12" id="onerilen_dersler">
      <div>
        <div class="baslik">
          <h3 class="baslik">Önerilen dersler:</h3>                  
        </div><!-- baslik -->
        <div id="content">
          <ul class="list-group">
            @if (count($onerilers) != 0)
              @foreach ($onerilers as $oneri)                  
                  <li class="list-group-item">
                    <a href="/egitim/egitim_detay/{{$oneri->id}}">{{$oneri->baslik}}</a>
                  </li>
              @endforeach            
            @else
              <p>Eğitimler yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
            @endif                                                       
          </ul>
        </div><!-- /content-->
      </div>
    </div><!-- /onerilen_dersler -->
  </div><!-- /row -->  
</div><!-- /anasayfa-derslerim -->