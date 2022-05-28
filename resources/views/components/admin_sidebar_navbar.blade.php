<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/admin" class="nav-link">Yönetim Paneli</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/admin/ara" class="nav-link"><i class="fas fa-search    "></i> Ara</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">    
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i> Tam Ekran
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link text-center">      
    <span class="brand-text font-weight-bold">O B M O <span class="font-weight-light">| Admin</span></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">        
      <div class="image d-flex align-items-center">
        <i class="fas fa-user-cog text-danger"></i>
      </div>
      <div class="info">
        <a href="#" class="d-block">
          {{auth()->user()->name}}
        </a>        
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-newspaper text-warning"></i>
            <p>
              Haber
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @if (count($navbars) != 0)
              @foreach ($navbars as $item)
              @if (($item->ismenu) == 0)
                <li class="nav-item">
                  <a href="{{$item->link}}" class="nav-link" title="{{$item->icerik}}">
                    <i class="{{$item->icon}} nav-icon"></i>
                    <p>{{$item->ad}}</p>
                  </a>
                </li>                  
              @endif                
              @endforeach
            @else
              <p>Menü yüklenemedi, lütfen daha sonra tekrar deneyiniz!</p>
            @endif            
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book text-primary"></i>
            <p>
              Eğitim
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @if (count($navbars) != 0)
              @foreach ($navbars as $item)
              @if (($item->ismenu) == 1)
                <li class="nav-item">
                  <a href="{{$item->link}}" class="nav-link" title="{{$item->icerik}}">
                    <i class="{{$item->icon}} nav-icon"></i>
                    <p>{{$item->ad}}</p>
                  </a>
                </li>                  
              @endif                
              @endforeach
            @else
              <p>Menü yüklenemedi, lütfen daha sonra tekrar deneyiniz!</p>
            @endif            
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-cog text-danger"></i>
            <p>
              Admin
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @if (count($navbars) != 0)
              @foreach ($navbars as $item)
              @if (($item->ismenu) == 2)
                <li class="nav-item">
                  <a href="{{$item->link}}" class="nav-link" title="{{$item->icerik}}">
                    <i class="{{$item->icon}} nav-icon"></i>
                    <p>{{$item->ad}}</p>
                  </a>
                </li>                  
              @endif                
              @endforeach
            @else
              <p>Menü yüklenemedi, lütfen daha sonra tekrar deneyiniz!</p>
            @endif            
          </ul>
        </li>
        @if (count($navbars) != 0)
          @foreach ($navbars as $item)
          @if (($item->ismenu) == 3)
            <li class="nav-item bg-danger rounded">
              <a href="{{$item->link}}" class="nav-link" title="{{$item->icerik}}">
                <i class="{{$item->icon}} nav-icon"></i>
                <p>{{$item->ad}}</p>
              </a>
            </li>                  
          @endif                
          @endforeach
        @else
          <p>Menü yüklenemedi, lütfen daha sonra tekrar deneyiniz!</p>
        @endif        
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <li class="nav-item rounded">
            <button type="submit" class="nav-link btn-danger text-white" title="Çıkış yapmak için tıklayınız!">              
              <span><i class="fas fa-sign-out-alt    "></i> Çıkış yap</span>
            </button>
          </li>
        </form>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>