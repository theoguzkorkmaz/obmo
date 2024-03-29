@props(['navbars'])

<nav class="col-md-2 col-12 d-none d-md-flex" id="main_nav">
  <div class="sticky-md-top in">
    <div class="nav-brand">
      <a href="/egitim">
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
        @endif
      </ul>

      <span>Diğer:</span>
      <ul class="list-group">
        <li class="list-group-item">
          <a type="button" onclick="themeToggle()" title="Mode değiştirmek için tıklayınız!"><i class="fas fa-moon    "></i> Dark mode</a>
        </li>
        <li class="list-group-item">
          <a href="/profil/{{auth()->user()->id}}" title="Profile gitmek için tıklayınız."><i class="fas fa-user"></i> Profil</a>
        </li>
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
        @endif
      </ul>
    </div><!-- /menu -->
    @auth
    <div class="w-full" id="nav-kimlik">
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">
          <span>{{auth()->user()->name}}</span>
          <span><i class="fas fa-sign-out-alt    "></i> Çıkış yap</span>
        </button>
      </form>            
    </div><!-- /nav-kimlik -->    
    @endauth    
    @guest
    <div class="w-full" id="nav-kimlik">
      <a href="/login">
        <span><i class="fas fa-sign-in-alt    "></i> Giriş Yap</span>
        <span class="d-none">1</span>        
      </a>
    </div><!-- /nav-kimlik -->
    @endguest
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
        @endif
      </ul>
    </div><!-- /menu -->
    @auth
    <div class="w-full" id="nav-kimlik">
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn d-flex flex-column align-items-center border px-3 py-2 mx-auto rounded">
          <span>{{auth()->user()->name}}</span>
          <span><i class="fas fa-sign-out-alt    "></i> Çıkış yap</span>
        </button>
      </form>            
    </div><!-- /nav-kimlik -->    
    @endauth   
  </div><!-- /offcanvas-body -->
</div><!-- /mobile-nav -->