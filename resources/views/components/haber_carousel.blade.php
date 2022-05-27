@props(['gundem'])
@props(['gundems'])
@props(['basliks'])

<div class="container p-md-0" id="carousel">
  <div id="caro-son">
    <div class="basliks d-flex flex-row justify-content-between">
      <h2 class="baslik">En son haber</h2>
      <a href="#" class="baslik-mini">Tümü</a>
    </div><!-- /basliks -->
    
    @if ($gundem)
      <a class="card" href="/haber/haber_detay/{{$gundem->id}}" title="{{$gundem->baslik}}">
        <img src="{{$gundem->resim ? asset('storage/'.$gundem->resim) : asset('/images/no-image.png')}}" alt="{{$gundem->resim_aciklama}}" title="{{$gundem->resim_aciklama}}" class="card-img-top shadow-sm"/>
        <div class="card-body">
          <h5 class="card-title">{{Str::limit($gundem->baslik, 70)}}</h5>
          <p class="card-text">{{Str::limit($gundem->icerik, 50)}}</p>
          <p class="card-text mb-0">
            <small class="text-muted">{{$gundem->created_at->diffForHumans()}}</small>
          </p>
        </div>
      </a>
    @else
      <p>Gündemdekiler yüklenemedi, lütfen daha sonra deneyin!</p>
    @endif 
  </div><!-- /caro-son -->

  <div id="caro-gundem">
    <div class="basliks d-flex flex-row justify-content-between">
      <h2 class="baslik">Gündemdekiler</h2>
      <a href="#" class="baslik-mini">Tümü</a>
    </div><!-- /basliks -->
          
    <div class="cards d-flex flex-column gap-3">
      @if (count($gundems) != 0)
        @foreach ($gundems as $gundem_item)
        <a class="card d-flex flex-row gap-3" href="/haber/haber_detay/{{$gundem_item->id}}" title="{{Str::limit($gundem_item->baslik, 70)}}">
          <img src="{{$gundem_item->resim ? asset('storage/'.$gundem_item->resim) : asset('/images/no-image.png')}}" class="shadow-sm" alt="{{$gundem_item->resim_aciklama}}" title="{{$gundem_item->resim_aciklama}}"">
          <div class="card-body d-flex align-items-center">          
            <h5 class="card-title">{{Str::limit($gundem_item->baslik, 70)}}</h5>          
          </div>
        </a>        
        @endforeach
      @else
          <p>Gündemdekiler yüklenemedi, lütfen daha sonra deneyin!</p>
      @endif 
    </div>
  </div><!-- /caro-gundem -->

  <div id="caro-baslik">
    <div class="basliks d-flex flex-row justify-content-between">
      <h2 class="baslik">Başlıklar</h2>
      <a href="#" class="baslik-mini">Tümü</a>     
    </div><!-- /basliks -->

    <div class="list-group">
      @if (count($basliks) != 0)
        @foreach ($basliks as $baslik)
          <a href="/haber/haber_detay/{{$baslik->id}}" class="list-group-item" title="{{Str::limit($baslik->baslik, 70)}}">
            <div class="w-100">
              <h5 class="text-break">{{Str::limit($baslik->baslik, 70)}}</h5>            
            </div>
            <p>{{Str::limit($baslik->icerik, 50)}}</p>          
          </a>
        @endforeach
      @else
        <p>Başlıklar yüklenemedi, lütfen daha sonra deneyin!</p>
      @endif 
    </div>
  </div><!-- /caro-basliklar -->
</div><!-- /carousel -->