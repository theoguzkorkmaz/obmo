{{-- {{$sayfa->id}}
{{$sayfa->baslik}}
{{$sayfa->ad}} --}}

<x-haber_layout :topbars="$topbars" :kategoris="$kategoris" :sayfas="$sayfas" :fhabers="$fhabers">
  <div class="container p-md-0">    
    <div class="row">      
      <main class="col-md-8 col-12">
        <div class="w-full" id="genel_sayfa_header">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="/sayfa_detay">Sayfalar</a></li>
              <li class="breadcrumb-item">
                {{$sayfa->ad}}
              </li>
            </ol>
          </nav>
      
          <h1 class="baslik">{{$sayfa->ad}}</h1>        
      
          <p class="yazar-tarih">
            <a class="ad" href="$">Y A Z A R</a> tarafından | <span class="tarih">{{$sayfa->created_at->diffForHumans()}}</span> paylaşıldı.
          </p>
      
          <div class="d-flex flex-row gap-2" id="paylasim">
            <p>Paylaşın:</p>
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item">
                <a href="#">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div id="detay_haber">
          <img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" class="shadow-sm" alt="{{$sayfa->resim_aciklama}}" title="{{$sayfa->resim_aciklama}}"">
          <p>{{$sayfa->resim_aciklama}}</p>
          {{$sayfa->icerik}}
        </div><!-- /detay-haber -->        
      </main> <!-- /main -->
      <x-haber_sayfa_detay_link_abone :sayfas="$sayfas"></x-haber_sayfa_detay_link_abone>
    </div>
  </div><!-- main-container -->

  <x-haber_bunlari_kacirma_yatay :kacirmas="$kacirmas"></x-haber_bunlari_kacirma_yatay>
</x-haber_layout>