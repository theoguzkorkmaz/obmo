@props(['kategoris'])
@props(['sayfas'])
@props(['topbars'])
@props(['fhabers'])

<footer class="container-fluid">
  <div class="container p-md-0">
    <div class="row">
      <div class="col-md-3 col-12" id="logo-side">
        <a class="footer-brand" href="#">
          <span>O B M O</span>
          <span><i class="fas fa-dove"></i> Güvercin</span>      
        </a>
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
        <div class="row">
          <div id="google_translate_element"></div> 
        </div><!-- translate -->
      </div><!-- /col-md-4 | logo-side -->
      <div class="col-md-9 col-12 d-flex flex-column flex-md-row gap-3" id="nav-side">
        <div class="box">
          <h5>Kategoriler</h5>
          <ul class="list-group">
            @if (count($kategoris) != 0)
              @foreach ($kategoris as $kategori)
                <li class="list-group-item">
                  <a href="/haber/kategori_detay/{{$kategori->id}}" title="{{$kategori->ad}}">{{$kategori->ad}}</a>
                </li>
              @endforeach
            @else
              <p>Kategoriler yüklenememiştir, lütfen daha sonra tekrar deneyin!</p>
            @endif            
          </ul>
        </div><!-- /box -->
        <div class="box">
          <h5>Sayfalar</h5>
          <ul class="list-group">
            @if (count($sayfas) != 0)
              @foreach ($sayfas as $sayfa)
                <li class="list-group-item">
                  <a href="/haber/sayfa_detay/{{$sayfa->id}}" title="{{$sayfa->ad}}">{{$sayfa->ad}}</a>
                </li>
              @endforeach
            @else
              <p>Sayfalar yüklenememiştir, lütfen daha sonra tekrar deneyin!</p>
            @endif            
          </ul>
        </div><!-- /box -->
        <div class="box">
          <h5>Bağlantılar</h5>
          <ul class="list-group">
            @if (count($topbars) != 0)
              @foreach ($topbars as $topbar)
                <li class="list-group-item">
                  <a href="{{$topbar->link}}" title="{{$topbar->aciklama}}">{{$topbar->ad}}</a>
                </li>
              @endforeach
            @else
              <p>Bağlantılar yüklenememiştir, lütfen daha sonra tekrar deneyin!</p>
            @endif 
          </ul>
        </div><!-- /box -->
        <div class="box">
          <h5>Rasgele haber</h5>
          <ul class="list-group">
            @if (count($fhabers) != 0)
              @foreach ($fhabers as $haber)
                <li class="list-group-item">
                  <a href="/haber/haber_detay/{{$haber->id}}" title="{{$haber->baslik}}">{{Str::limit($haber->baslik, 30)}}</a>
                </li>
              @endforeach
            @else
              <p>Haberler yüklenememiştir, lütfen daha sonra tekrar deneyin!</p>
            @endif 
          </ul>
        </div><!-- /box -->
      </div><!-- /col-md-8 | nav-side -->
    </div><!-- /row -->
    <div class="row" id="copyright">
      <p><i class="fas fa-copyright"></i> 2022, OBMO.com</p>
    </div><!-- /row -->
  </div>
</footer><!-- /footer -->

<!-- js -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript"> 
  function googleTranslateElementInit() { 
      new google.translate.TranslateElement(
          {pageLanguage: 'tr'}, 
          'google_translate_element'
      ); 
  }     
</script>  