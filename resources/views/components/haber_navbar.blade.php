@props(['kategoris'])
@props(['sayfas'])

<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container p-md-0">
    <a class="navbar-brand" href="#">
      <span>O B M O</span>
      <span><i class="fas fa-dove"></i> Güvercin</span>      
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_opener">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="nav_opener">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/haber"><i class="fas fa-home    "></i></a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> --}}
        <li class="nav-item dropdown has-megamenu">
          <a class="nav-link" href="#" data-bs-toggle="dropdown">Kategoriler</a>
          <div class="dropdown-menu megamenu container mx-auto" role="menu">
            <div class="row row-cols-1 row-cols-md-6 g-4">
              @if (count($kategoris) != 0)
                @foreach ($kategoris as $kategori)
                <div class="col">
                  <a class="card border" href="/haber/kategori_detay/{{$kategori->id}}" title="{{$kategori->aciklama}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$kategori->ad}}</h5>
                      <p class="card-text">{{Str::limit($kategori->aciklama, 30)}}</p>
                    </div>
                  </a>
                </div>
                @endforeach
              @else
                <p>Kategoriler yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
              @endif              
            </div>            
          </div> <!-- /dropdown-mega-menu -->
        </li>
        <li class="nav-item dropdown has-megamenu">
          <a class="nav-link" href="#" data-bs-toggle="dropdown">Sayfalar</a>
          <div class="dropdown-menu megamenu container mx-auto" role="menu">
            <div class="row row-cols-1 row-cols-md-6 g-4">
              @if (count($sayfas) != 0)
                @foreach ($sayfas as $sayfa)
                <div class="col">
                  <a class="card border" href="/haber/sayfa_detay/{{$sayfa->id}}" title="{{$sayfa->icerik}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$sayfa->ad}}</h5>
                      <p class="card-text">{{Str::limit($sayfa->icerik, 30)}}</p>
                    </div>
                  </a>
                </div>
                @endforeach
              @else
                <p>Sayfalar yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
              @endif              
            </div>            
          </div> <!-- /dropdown-mega-menu -->
        </li>
      </ul>
    </div>
  </div>
</nav><!-- /navbar -->