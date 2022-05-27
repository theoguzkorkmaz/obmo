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
        <x-habers_haberler_false :habersd="$habersd"></x-habers_haberler_false>
      </div>
    @else
      <div id="sonuc-true">
        <p>"Aranan kelime/cümle" aramanıza dair bulduğumuz sonuçlar:</p>
        <x-haber_index_haberler :habers="$habers"></x-haber_index_haberler>
    @endif    
  </div><!-- /ara-sonuc -->

  <x-haber_bunlari_kacirma_yatay :kacirmas="$kacirmas"></x-haber_bunlari_kacirma_yatay>

  <div class="container p-md-0 kategori_haber">
    <h2 class="baslik d-flex flex-row items-center justify-content-between">
      Kategori1
      <a href="#">
        Tümü
      </a>
    </h2>
    <div class="card-group d-flex flex-row flex-nowrap gap-3">
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/3.jfif" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
    </div>    
  </div><!-- /kategori_haber -->

  <div class="container p-md-0 kategori_haber">
    <h2 class="baslik d-flex flex-row items-center justify-content-between">
      Kategori2
      <a href="#">
        Tümü
      </a>
    </h2>
    <div class="card-group d-flex flex-row flex-nowrap gap-3">
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
      <a class="card" href="#">
        <img src="./img/FOellrNrGtkU_Svg2aOH5iRdT_720x480.webp" class="card-img-top shadow-sm" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text mb-0">
            <small class="text-muted">3dk önce güncellendi</small>
          </p>
        </div>
      </a>
    </div>    
  </div><!-- /kategori_haber -->  
</x-haber-layout>