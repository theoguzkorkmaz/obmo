@props(['kategori1'])
@props(['kategori2'])

  <div class="container p-md-0 kategori_haber">
    <h2 class="baslik d-flex flex-row items-center justify-content-between">
      Diğer kategoriler
      <a href="/haber/kategoriler">
        Tümü
      </a>
    </h2>
    <div class="card-group d-flex flex-row flex-nowrap gap-3">
      @if (count($kategori1) != 0)
        @foreach ($kategori1 as $item)         
          <a class="card" href="#">
            <img src="{{$item->resim ? asset('storage/'.$item->resim) : asset('/images/no-image.png')}}" class="card-img-top shadow-sm" alt="{{Str::limit($item->icerik, 30)}}">
            <div class="card-body">
              <h5 class="card-title">{{Str::limit($item->baslik, 70)}}</h5>
              <p class="card-text">{{Str::limit($item->icerik, 120)}}</p>
              <p class="card-text mb-0">
                <small class="text-muted">{{$item->created_at->diffForHumans()}}</small>
              </p>
            </div>
          </a>       
        @endforeach          
      @else
        <p>Kategori yüklenemedi, lütfen daha sonra tekrar deneyiniz!</p>   
      @endif  
    </div>    
  </div><!-- /kategori_haber -->

  <div class="container p-md-0 kategori_haber">
    <h2 class="baslik d-flex flex-row items-center justify-content-between">
      Diğer kategoriler
      <a href="/haber/kategoriler">
        Tümü
      </a>
    </h2>
    <div class="card-group d-flex flex-row flex-nowrap gap-3">
      @if (count($kategori2) != 0)
        @foreach ($kategori2 as $item)         
          <a class="card" href="#">
            <img src="{{$item->resim ? asset('storage/'.$item->resim) : asset('/images/no-image.png')}}" class="card-img-top shadow-sm" alt="{{Str::limit($item->icerik, 30)}}">
            <div class="card-body">
              <h5 class="card-title">{{Str::limit($item->baslik, 70)}}</h5>
              <p class="card-text">{{Str::limit($item->icerik, 120)}}</p>
              <p class="card-text mb-0">
                <small class="text-muted">{{$item->created_at->diffForHumans()}}</small>
              </p>
            </div>
          </a>       
        @endforeach          
      @else
        <p>Kategori yüklenemedi, lütfen daha sonra tekrar deneyiniz!</p>   
      @endif         
    </div>    
  </div><!-- /kategori_haber -->