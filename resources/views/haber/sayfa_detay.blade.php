{{-- {{$sayfa->id}}
{{$sayfa->baslik}}
{{$sayfa->ad}} --}} 

<x-haber_layout :topbars="$topbars" :kategoris="$kategoris" :sayfas="$sayfas" :fhabers="$fhabers" :sosyals="$sosyals">
  <div class="container p-md-0">    
    <div class="row">      
      <main class="col-md-8 col-12">
        <div class="w-full" id="genel_sayfa_header">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
              <li class="breadcrumb-item"><a href="/sayfa_detay">Sayfalar</a></li>
              <li class="breadcrumb-item">
                {!! substr(strip_tags($sayfa->ad), 0, 70) !!}
              </li>
            </ol>
          </nav>
      
          <h1 class="baslik">{!! $sayfa->ad !!}</h1>        
      
          <p class="yazar-tarih">
            <span class="tarih">{{$sayfa->created_at->diffForHumans()}}</span> paylaşıldı.
          </p>
      
          <div class="d-flex flex-row gap-2" id="paylasim">            
            <x-haber_paylas :haber="$sayfa"></x-haber_paylas>            
          </div>
        </div>
        <div id="detay_haber">
          <img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" class="shadow-sm" alt="{{$sayfa->resim_aciklama}}" title="{{$sayfa->resim_aciklama}}"">
          <p>{{$sayfa->resim_aciklama}}</p>
          {!! $sayfa->icerik !!}
        </div><!-- /detay-haber -->        
      </main> <!-- /main -->
      <x-haber_sayfa_detay_link_abone :sayfas="$sayfas"></x-haber_sayfa_detay_link_abone>
    </div>
  </div><!-- main-container -->

  <x-haber_bunlari_kacirma_yatay :kacirmas="$kacirmas"></x-haber_bunlari_kacirma_yatay>
</x-haber_layout>