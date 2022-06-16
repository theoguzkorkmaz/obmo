<x-haber_layout :topbars="$topbars" :kategoris="$kategoris" :sayfas="$sayfas" :fhabers="$fhabers" :sosyals="$sosyals">
  <x-haber_kategori_nav :kategoris="$kategoris"></x-haber_kategori_nav>
  <div class="container p-md-0" id="ara">
    <div class="ara-brand">
      <span>O B M O</span>
      <span><i class="fas fa-search"></i> Ara</span>      
    </div><!-- /ara-brand -->
    <form action="/haber/ara">
      <div class="input-group">       
        <input type="text" class="form-control" name="ara" placeholder="Aramak istediğiniz haberi yazınız">
        <button class="btn" type="submit" id="button-addon1"><i class="fas fa-search"></i></button>
      </div>
    </form>
  </div><!-- /ara --> 

  {{-- @foreach ($habers as $item)
      {{$item->id}}
      {{$item->baslik}}
  @endforeach --}}

  <div class="container p-md-0 haberler" id="ara-sonuc">
    <h2 class="baslik">
      Arama sonuçlarınız:
    </h2>

    @if (count($habers) == 0)
      <div id="sonuc-false">
        <p>"Aranan kelime/cümle" aramanıza dair bir sonuç bulamadık! Aramanıza yakın bulduklarımız:</p>
        <x-haber_index_haberler :habers="$habersd"></x-haber_index_haberler>
      </div>
    @else
      <div id="sonuc-true">        
        <x-haber_index_haberler :habers="$habers"></x-haber_index_haberler>
    @endif    
  </div><!-- /ara-sonuc -->
</div>
</x-haber-layout>