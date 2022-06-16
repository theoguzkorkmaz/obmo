{{-- @foreach ($topbars as $item)
    {{$item->id}}
    {{$item->ad}}
@endforeach --}}

<div class="container d-flex flex-row items-center justify-content-between p-md-0" id="topbar">    
  <div>
    <ul class="list-group list-group-horizontal d-flex gap-2">
      <li class="list-group-item">
        <a type="button" onclick="themeToggle()" title="Mode değiştirmek için tıklayınız!"><i class="fas fa-moon    "></i> Dark mode</a>
      </li>
      @guest
      <li class="list-group-item">
        <a href="/login" title="Giriş yapmak için tıklayın">
          <i class="fas fa-sign-in-alt    "></i>
          Giriş yap
        </a>
      </li>   
      @endguest
      @auth
      <li class="list-group-item">
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="submit" class="btn btn-xs">
            <i class="fas fa-sign-out-alt    "></i>
            {{auth()->user()->name}}
          </button>
        </form>
      </li>    
      @endauth        
      @if (count($topbars) != 0) 
        @foreach ($topbars as $topbar)
          @if ($topbar->yer == 0)                
          <li class="list-group-item">
            <a href="{{$topbar->link}}" title="{{$topbar->ad}}">
              <i class="{{$topbar->icon}}"></i>
              <span class="d-none d-md-inline"> 
                {{$topbar->ad}}
              </span>
            </a>
          </li>
          @endif
        @endforeach      
      @endif      
    </ul>
  </div><!-- /&_left -->
  <div>
    <ul class="list-group list-group-horizontal d-flex gap-2">
      @auth
        <li class="list-group-item">
          <a href="/profil/{{auth()->user()->id}}" title="Profile gitmek için tıklayınız."><i class="fas fa-user"></i> Profil</a>
        </li>        
      @endauth
      @if (count($topbars) != 0)
        @foreach ($topbars as $topbar)
          @if ($topbar->yer == 1)                
          <li class="list-group-item">
            <a href="{{$topbar->link}}" title="{{$topbar->ad}}">
              <i class="{{$topbar->icon}}"></i>
              <span class="d-none d-md-inline">
                {{$topbar->ad}}
              </span>
            </a>
          </li>
          @endif
        @endforeach      
      @endif          
    </ul>
  </div><!-- /&_right -->    
</div><!-- /topbar -->