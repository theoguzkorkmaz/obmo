<x-egitim_layout :navbars="$navbars">  

  @if ($egitim)
  <div class="d-flex flex-column flex-md-row gap-3 p-md-0 w-full" id="main_ic">
    <div class="" id="content">
      <div class="header">
        <div class="d-flex flex-row gap-3">
          <img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="{!! $egitim->baslik !!}" class="shadow-sm">                
          <div class="d-flex flex-column gap-2 justify-content-between">
            <h2 class="baslik">{!! $egitim->baslik !!}</h2>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="#"><i class="fas fa-heart"></i> 3 beğeni</a>
              </li>              
              <li class="list-group-item">
                <a href="#"><i class="fas fa-user-graduate"></i> 23 kişi kayıtlı</a>
              </li>           
              <li class="list-group-item">
                <a href="#"><i class="fas fa-comments"></i> 123 yorum</a>
              </li>              
              <li class="list-group-item">
                <a href="#"><i class="fas fa-paperclip"></i> 3 ek dosya</a>
              </li>           
            </ul>
          </div>
        </div>              
      </div><!-- /header -->
      <nav class="nav d-flex flex-row flex-wrap gap-2">
        <a class="nav-link" href="#aciklama">Açıklama</a>
        <a class="nav-link" href="#icerik">içerik</a>
        <a class="nav-link" href="#kitle">kitle</a>
        <a class="nav-link" href="#kazanim">kazanımlar</a>
        <a class="nav-link" href="#yorum">yorumlar</a>
        <a class="nav-link" href="#dokuman">dökümanlar</a>
      </nav><!-- /nav -->
      <div class="w-full" id="aciklama">
        <h3 class="baslik">açıklama</h3>
        <p>
          {!! $egitim->aciklama !!}
        </p>
      </div><!-- /aciklama -->
      <div class="w-full" id="icerik">
        <h3 class="baslik">içerik</h3>        
        @if ((count($iceriksay) != 0))
        <div class="accordion accordion-flush" id="accordionFlushExample">                    
            @foreach ($iceriks as $icerik)                                  
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{!! $icerik->id !!}" aria-expanded="false" aria-controls="flush-collapse{!! $icerik->id !!}">
                    {!! $icerik->baslik !!}
                  </button>
                </h2>
                <div id="flush-collapse{!! $icerik->id !!}" class="accordion-collapse collapse" aria-labelledby="flush-heading{!! $icerik->id !!}" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    {!! $icerik->aciklama !!}
                  </div>
                </div>
              </div>
            @endforeach                                      
        </div>   
        @else
        {!! $egitim->icerik !!}
        @endif
      </div><!-- /icerik -->
      <div class="w-full" id="kitle">
        <h3 class="baslik">kitle</h3>
        <p>{!! $egitim->kitle !!}</p>
      </div><!-- /kitle -->
      <div class="w-full" id="kazanim">
        <h3 class="baslik">kazanımlar</h3>
        <p>{!! $egitim->kazanim !!}</p>
      </div><!-- /kazanim -->

      {{-- {!! -- <x-egitim_detay_yorum :yorums="$yorums" :egitim="$egitim" :yorumsay="$yorumsay"></x-egitim_detay_yorum> -- !!} --}}
      <x-egitim_detay_yorum_formsuz :yorums="$yorums" :yorumsay="$yorumsay"></x-egitim_detay_yorum_formsuz>
      
      <div class="w-full" id="dokuman">
        <h3 class="baslik">dökümanlar</h3>
        <p>{!! $egitim->dokuman !!}</p>
      </div><!-- /dokuman -->      
    </div><!-- /content -->
    <div class="" id="aside">
      @if($kayit)            
      <div class="w-full d-flex flex-column btn-group is-abone">
        <a href="/egitim/egitim_icerik/{!! $egitim->id !!}" class="btn mb-2">eğitime devam et</a>              
        <p>Katılım durumu: <span>Devam ediyor</span></p>
        <p>Başarı durumu: <span>Başarısız</span></p>
        <p>Başarı puanı: <span>4/100</span></p>
        <p>Harcanan süre: <span>2:40:00</span></p>
        <p>Tamamlanma durumu: <span>%40</span></p>
      </div><!-- /abone -->
      @else        
        <div class="w-full d-flex flex-column gap-2 btn-group is-abone-degil">
          <form action="/egitim/egitim_detay/{!! $egitim->id !!}" method="post">
            @csrf
            <button type="submit" name="" id="" class="btn">eğitime katıl</button>
          </form>
                        
          <button type="button" name="" id="" class="btn btn1"><i class="fas fa-bookmark"></i>Daha sonra izleye ekle</button>                        
        </div><!-- /abone-değil -->
      @endif      

      <div class="w-full d-flex flex-column gap-2 egitmen">
        <h4 class="baslik">Eğitmen</h4>
        <a href="#" class="d-flex flex-row align-items-center align-items-center w-100 gap-3">          
          <div class="w-100 py-2 px-4 d-flex flex-column gap-1">
            <h3><i class="fas fa-user-astronaut    "></i> {!! $egitmen->name !!}</h3>
            <p><i class="fas fa-envelope    "></i> {!! $egitmen->email !!}</p>
            <p><i class="fas fa-location-arrow    "></i> {!! $egitmen->city !!}</p>
          </div>
        </a>
      </div><!-- /egitmen -->
    </div><!-- /aside -->
  </div><!-- /main_ic -->
  @else
    <p>Sayfa yüklenirken bir hata oluştu, lütfen daha sonra tekrar deneyin!</p>
  @endif
</x-egitim_layout>