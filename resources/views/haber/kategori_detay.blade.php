{{-- {{$kategori->id}}
{{$kategori->baslik}}
{{$kategori->ad}} --}}

<x-haber_layout :topbars="$topbars" :kategoris="$kategoris" :sayfas="$sayfas" :fhabers="$fhabers" :sosyals="$sosyals">
  <div class="container p-md-0" id="kategori_baslik">    
    <h2 class="baslik text-uppercase"><i class="{{$kategori->icon}} me-3"></i> {{$kategori->ad}}</h2>
  </div><!-- /kategori_nav -->

  <x-haber_carousel :gundem="$gundem" :gundems="$gundems" :basliks="$basliks"></x-haber_carousel>

  <div class="container p-md-0 haberler">
    <h2 class="baslik">
      {{$kategori->ad}} haberleri
    </h2>

    <x-haber_index_haberler :habers="$habers"></x-haber_index_haberler>

    <x-haber_bunlari_kacirma_yatay :kacirmas="$kacirmas"></x-haber_bunlari_kacirma_yatay>

    <x-haber_kategori_haber :kategori1="$kategori1" :kategori2="$kategori2"></x-haber_kategori_haber>

    <div class="container p-md-0" id="kategori_aciklama">
      <h3 class="baslik">
        {{$kategori->ad}}
      </h3>
      <p>
        {{$kategori->aciklama}}
      </p>
    </div> <!-- /kategori_aciklama -->
  </div>
</x-haber_layout>