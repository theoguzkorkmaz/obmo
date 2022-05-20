@props(['navbars'])

<nav class="col-md-2 col-12 d-none d-md-flex" id="main_nav">
  <div class="sticky-md-top in">
    <div class="nav-brand" href="#">
      <a href="#">
        O B M O <span><i class="fas fa-spider"></i> Örümcek</span>
      </a>
    </div><!-- navbar-brand -->
    <div class="w-full" id="menu">
      <span>Menü:</span>
      <ul class="list-group">
        @if (count($navbars) != 0)
          @foreach ($navbars as $item)
            @if (($item->ismenu) == 1)
              <li class="list-group-item">
                <a href="{{$item->link}}" title="{{$item->ad}}">
                  <i class="{{$item->icon}}"></i> {{$item->ad}}
                </a>
              </li>
            @endif                    
          @endforeach
        @else
          <p>Navbar yüklenemedi, lütfen daha sonra tekrar deneyiniz.</p>
        @endif
      </ul>

      <span>Diğer:</span>
      <ul class="list-group">
        @if (count($navbars) != 0)
          @foreach ($navbars as $item)            
            @if (($item->ismenu) == 0)
              <li class="list-group-item">
                <a href="{{$item->link}}" title="{{$item->ad}}">
                  <i class="{{$item->icon}}"></i> {{$item->ad}}
                </a>
              </li>
            @endif  
          @endforeach
        @else
          <p>Navbar yüklenemedi, lütfen daha sonra tekrar deneyiniz.</p>
        @endif
      </ul>
    </div><!-- /menu -->
    <div class="w-full" id="nav-kimlik">
      <a href="#">
        <span>Oğuz Korkmaz</span>
        <span><i class="fas fa-map-marker"></i> Zonguldak</span>
      </a>
    </div><!-- /nav-kimlik -->
  </div><!-- /in -->
</nav><!-- /md-nav -->
<div class="offcanvas offcanvas-start d-flex d-sm-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <div class="nav-brand" href="#">
      <a href="#">
        O B M O <span><i class="fas fa-spider"></i> Örümcek</span>
      </a>
    </div><!-- navbar-brand -->          
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="w-full" id="menu">
      <span>Menü:</span>
      <ul class="list-group">
        @if (count($navbars) != 0)
          @foreach ($navbars as $item)
            @if (($item->ismenu) == 1)
              <li class="list-group-item">
                <a href="{{$item->link}}" title="{{$item->ad}}">
                  <i class="{{$item->icon}}"></i> {{$item->ad}}
                </a>
              </li>
            @endif                    
          @endforeach
        @else
          <p>Navbar yüklenemedi, lütfen daha sonra tekrar deneyiniz.</p>
        @endif
      </ul>

      <span>Diğer:</span>
      <ul class="list-group">
        @if (count($navbars) != 0)
          @foreach ($navbars as $item)            
            @if (($item->ismenu) == 0)
              <li class="list-group-item">
                <a href="{{$item->link}}" title="{{$item->ad}}">
                  <i class="{{$item->icon}}"></i> {{$item->ad}}
                </a>
              </li>
            @endif  
          @endforeach
        @else
          <p>Navbar yüklenemedi, lütfen daha sonra tekrar deneyiniz.</p>
        @endif
      </ul>
    </div><!-- /menu -->
    <div class="w-full" id="nav-kimlik">
      <a href="#">
        <span>Oğuz Korkmaz</span>
        <span><i class="fas fa-map-marker"></i> Zonguldak</span>
      </a>
    </div><!-- /nav-kimlik -->
  </div><!-- /offcanvas-body -->
</div><!-- /mobile-nav -->