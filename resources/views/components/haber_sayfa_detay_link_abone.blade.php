<article class="col-md-4 col-12" id="genel_sayfa_diger">
                       
  <div class="sticky-md-top in">
    <h2 class="baslik">
      Diğer bağlantılar
    </h2>
    <div class="box">
      <ul class="list-group">
        @if (count($sayfas) != 0)
          @foreach ($sayfas as $sayfa)
            <li class="list-group-item">
              <a href="/haber/sayfa_detay/{{$sayfa->id}}">{{$sayfa->ad}}</a>
            </li>
          @endforeach  
        @else
          <p>Sayfalar yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
        @endif                  
      </ul>
    </div> <!-- bu haberleri kaçırmayın -->
    
    <x-haber_detay_bulten></x-haber_detay_bulten>

  </div><!-- /bu haberleeri kaçırmayın ve abone bülteni-->
</article> <!-- /article -->