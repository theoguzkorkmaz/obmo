<x-egitim_layout :navbars="$navbars">  
  {{-- {{$egitim->baslik}} --}}  

  @if ($egitim)
  <div class="d-flex flex-column flex-md-row gap-3 p-md-0 w-full" id="main_ic">
    <div class="" id="content">
      <div class="header">
        <div class="d-flex flex-row gap-3">
          <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHw0fHxjbGFzc3xlbnwwfHx8fDE2NTE4NjgyNDc&ixlib=rb-1.2.1&q=80&w=1080" alt="" class="shadow-sm">                
          <div class="d-flex flex-column gap-2 justify-content-between">
            <h2 class="baslik">{{$egitim->baslik}}</h2>
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
          {{$egitim->icerik}}
        </p>
      </div><!-- /aciklama -->
      <div class="w-full" id="icerik">
        <h3 class="baslik">içerik</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample">          
          @foreach ($iceriks as $icerik)                                  
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$icerik->id}}" aria-expanded="false" aria-controls="flush-collapse{{$icerik->id}}">
                  {{$icerik->baslik}}
                </button>
              </h2>
              <div id="flush-collapse{{$icerik->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$icerik->id}}" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  {{$icerik->aciklama}}
                </div>
              </div>
            </div>
          @endforeach          
        </div>
        @php
          if (!isset($icerik->id)) {
            echo('<p>İçerik bulunamadı!</p>');
          }    
        @endphp
      </div><!-- /icerik -->
      <div class="w-full" id="kitle">
        <h3 class="baslik">kitle</h3>
        <p>{{$egitim->kitle}}</p>
      </div><!-- /kitle -->
      <div class="w-full" id="kazanim">
        <h3 class="baslik">kazanımlar</h3>
        <p>{{$egitim->kazanim}}</p>
      </div><!-- /kazanim -->
      <div class="w-full" id="yorum">
        <h3 class="baslik">yorumlar</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati modi illo, cupiditate fugiat deserunt debitis esse quae exercitationem assumenda, earum praesentium aliquid minima inventore. Ipsa qui saepe maiores ad ipsam.</p>
        <div class="card-group d-flex flex-column gap-2 w-full">
          <div class="card w-full">
            <div class="card-title">
              <i class="fas fa-quote-left"></i>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, maxime?
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="card-body">
              <strong>Ahmet Ahmetoğlu</strong>
              <p>32.02.2032 tarihinde yazılmıştır.</p>
            </div>
          </div>
          <div class="card w-full">
            <div class="card-title">
              <i class="fas fa-quote-left"></i>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, maxime?
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="card-body">
              <strong>Ahmet Ahmetoğlu</strong>
              <p>32.02.2032 tarihinde yazılmıştır.</p>
            </div>
          </div>
          <div class="card w-full">
            <div class="card-title">
              <i class="fas fa-quote-left"></i>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, maxime?
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="card-body">
              <strong>Ahmet Ahmetoğlu</strong>
              <p>32.02.2032 tarihinde yazılmıştır.</p>
            </div>
          </div>
        </div><!-- /card-group -->
      </div><!-- /yorum -->
      <div class="w-full" id="dokuman">
        <h3 class="baslik">dökümanlar</h3>
        <p>{{$egitim->dokuman}}</p>
      </div><!-- /dokuman -->      
    </div><!-- /content -->
    <div class="" id="aside">
      <div class="w-full d-flex flex-column gap-2 btn-group is-abone-degil">
        <form action="/egitim/egitim_detay/{{$egitim->id}}" method="post">
          @csrf
          <button type="submit" name="" id="" class="btn">eğitime katıl</button>
        </form>
                      
        <button type="button" name="" id="" class="btn btn1"><i class="fas fa-bookmark"></i>Daha sonra izleye ekle</button>              
        <button type="button" name="" id="" class="btn btn2"><i class="fas fa-heart"></i>Beğenilere ekle</button>              
      </div><!-- /abone-değil -->

      <div class="w-full d-flex flex-column btn-group is-abone">
        <button type="button" name="" id="" class="btn mb-2">eğitime devam et</button>              
        <p>Katılım durumu: <span>Devam ediyor</span></p>
        <p>Başarı durumu: <span>Başarısız</span></p>
        <p>Başarı puanı: <span>4/100</span></p>
        <p>Harcanan süre: <span>2:40:00</span></p>
        <p>Tamamlanma durumu: <span>%40</span></p>
      </div><!-- /abone -->

      <div class="w-full d-flex flex-column gap-2 egitmen">
        <h4 class="baslik">Eğitmen</h4>
        <a href="#" class="d-flex flex-row align-items-center gap-3">
          <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHwyMHx8cG9ydHJhaXR8ZW58MHx8fHwxNjUxNzczNzkw&ixlib=rb-1.2.1&q=80&w=1080" alt="">
          <div>
            <h3>Oğuz Korkmaz</h3>
            <p>Bilgisayar Mühendisi</p>
          </div>
        </a>
      </div><!-- /egitmen -->

      <div class="w-full d-flex flex-column gap-2 egitmenler">
        <h4 class="baslik">Eğitmenler</h4>
        <div class="d-flex flex-column gap-2">
          <a href="#" class="d-flex flex-row align-items-center gap-2">
            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHwyMHx8cG9ydHJhaXR8ZW58MHx8fHwxNjUxNzczNzkw&ixlib=rb-1.2.1&q=80&w=1080" alt="">
            <div>
              <h3>Oğuz Korkmaz</h3>
              <p>Bilgisayar Mühendisi</p>
            </div>
          </a>
          <a href="#" class="d-flex flex-row align-items-center gap-2">
            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTgwOTN8MHwxfHNlYXJjaHwyMHx8cG9ydHJhaXR8ZW58MHx8fHwxNjUxNzczNzkw&ixlib=rb-1.2.1&q=80&w=1080" alt="">
            <div>
              <h3>Oğuz Korkmaz</h3>
              <p>Bilgisayar Mühendisi</p>
            </div>
          </a>
        </div>
      </div><!-- /egitmenler -->
    </div><!-- /aside -->
  </div><!-- /main_ic -->
  @else
    <p>Sayfa yüklenirken bir hata oluştu, lütfen daha sonra tekrar deneyin!</p>
  @endif
</x-egitim_layout>