<div class="container p-0 w-full" id="anasayfa-derslerim">            
  <div class="row">
    <div class="col-12" id="derslerim">
      <div>
        <div class="baslik">
          <h3 class="baslik">Dersler:</h3>
          <p>{{count($egitims)}} adet ders bulunmaktadır.</p>
        </div><!-- /baslik -->
        <div class="row row-cols-1 row-cols-md-4 g-3" id="content">
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
            <p>Üzgünüz, bu başlıkta, içerikte veya etikette eğitim bulunmamaktadır!</p>
          @endif
        </div><!-- /content -->
      </div>
    </div>
  </div><!-- /row -->  

  <div class="row my-4">
    {{$egitims->links()}}
  </div>
</div><!-- /anasayfa-derslerim -->