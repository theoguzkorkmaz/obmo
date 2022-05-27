<x-egitim_layout :navbars="$navbars">

  <h1 class="baslik mb-3">{{$kategori->baslik}}</h1>

  @if (count($egitims) != 0)
  <div class="container p-0 w-full" id="anasayfa-derslerim">            
    <div class="row">
      <div class="col-12" id="derslerim">
        <div>
          <div class="baslik">
            <h3 class="baslik">Tüm dersler:</h3>
            <p><strong>{{$kategori->baslik}}</strong> kategorisinde <strong>{{count($egitims)}} adet</strong> eğitim bulunmaktadır.</p>
          </div><!-- /baslik -->
          <div class="row row-cols-1 row-cols-md-4 g-3" id="content">                
            @foreach ($egitims as $item)         
              <div class="col">
                <a class="card" href="/egitim/egitim_detay/{{$item->id}}">                
                  <img src="{{$item->resim ? asset('storage/'.$item->resim) : asset('/images/no-image.png')}}" class="card-img-top" alt="{{Str::limit($item->baslik, 30)}}" title="{{Str::limit($item->baslik, 30)}}">
                  <div class="card-body">
                    <h5 class="card-title">{{$item->baslik}}</h5>                        
                    <p>{{$item->aciklama}}</p>
                    <p><i class="{{$item->icon}}"></i></p>
                  </div>
                </a>
              </div>
            @endforeach
          </div><!-- /content -->
        </div>
      </div>
    </div><!-- /row -->  
  </div><!-- /anasayfa-derslerim -->    
  @else
    <p>Eğitimler yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
  @endif

</x-egitim_layout>