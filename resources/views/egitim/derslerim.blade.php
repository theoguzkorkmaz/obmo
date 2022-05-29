<x-egitim_layout :navbars="$navbars">

  <div class="w-full" id="genel-carousel">
    <div class="baslik">
      <h3><i class="fas fa-eye"></i> Genel bakış</h3>      
    </div>
    <div class="box-group d-flex flex-column flex-md-row gap-3">
      <div class="box w-25 d-flex flex-column justify-content-between">
        <div class="box-header d-flex flex-row align-items-center gap-3">
          <i class="fas fa-book"></i>
          <p>Derslerim</p>
        </div>
        <div class="box-content d-flex flex-row align-items-center gap-3">
          <p><strong>{{count($derss)}}</strong></p>
          <p class="pozitif d-none">+12% artış</p>
        </div>
      </div><!-- /box -->
      <div class="box w-25 d-flex flex-column justify-content-between">
        <div class="box-header d-flex flex-row align-items-center gap-3">
          <i class="fas fa-comment"></i>
          <p>Yorumlarım</p>
        </div>
        <div class="box-content d-flex flex-row align-items-center gap-3">
          <p><strong>{{count($yorums)}}</strong></p>
          <p class="notr d-none">+12% artış</p>
        </div>
      </div><!-- /box -->
      <div class="box w-25 d-flex flex-column justify-content-between">
        <div class="box-header d-flex flex-row align-items-center gap-3">
          <i class="fas fa-check-double    "></i>
          <p>Tamamlanan içerikler</p>
        </div>
        <div class="box-content d-flex flex-row align-items-center gap-3">
          <p><strong>{{count($iceriks)}}</strong></p>
          <p class="pozitif d-none">+12% artış</p>
        </div>
      </div><!-- /box -->
      <div class="box w-25 d-flex flex-column justify-content-between">
        <div class="box-header d-flex flex-row align-items-center gap-3">
          <i class="fas fa-fighter-jet    "></i>
          <p>Tamamlanan sınavlar</p>
        </div>
        <div class="box-content d-flex flex-row align-items-center gap-3">
          <p><strong>{{count($sinavs)}}</strong></p>
          <p class="pozitif d-none">+12% artış</p>
        </div>
      </div><!-- /box -->
    </div><!-- /box-group -->
  </div><!-- /carousel -->

  @if (count($derss) != 0)          
    <div class="container p-0 w-full" id="anasayfa-derslerim">            
      <div class="row">
        <div class="col-12" id="derslerim">
          <div>
            <div class="baslik">
              <h3 class="baslik">Tüm dersler:</h3>
              <p>Platformumuzda <strong>{{count($derss)}}</strong> adet dersiniz bulunmaktadır.</p>
            </div><!-- /baslik -->
            <div class="row row-cols-1 row-cols-md-4 g-3" id="content">                
              @foreach ($derss as $item)         
                <div class="col">
                  <a class="card" href="/egitim/egitim_detay/{{$item->id}}">                
                    <img src="{{$item->resim ? asset('storage/'.$item->resim) : asset('/images/no-image.png')}}" class="card-img-top" alt="{{Str::limit($item->baslik, 30)}}" title="{{Str::limit($item->baslik, 30)}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->baslik}}</h5>    
                      <p>Açıklama: <span>{{Str::limit($item->aciklama, 40)}}</span></p>                                      
                      <p class="mt-2"><i class="fas fa-tags    "></i> <span>{{$item->etiket}}</span></p>
                      <p class="mt-2"><i class="fas fa-clock"></i> <span>{{$item->created_at}}</span></p>
                    </div>
                  </a>
                </div>
              @endforeach
            </div><!-- /content -->
          </div>
        </div>
      </div><!-- /row -->  

      <div class="row my-4">
        {{$derss->links()}}
      </div>

    </div><!-- /anasayfa-derslerim -->    
  @else
    <p>Kategoriler yüklenemedi, lütfen tekrar deneyiniz.</p>
  @endif
</x-egitim_layout>