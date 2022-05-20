{{-- @foreach ($topbars as $item)
    {{$item->id}}
    {{$item->ad}}
@endforeach --}}

<div class="container d-flex flex-row items-center justify-content-between p-md-0" id="topbar">    
  <div>
    <ul class="list-group list-group-horizontal d-flex gap-2">   
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
      @else
        <p>Topbar yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
      @endif      
    </ul>
  </div><!-- /&_left -->
  <div>
    <ul class="list-group list-group-horizontal d-flex gap-2">
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
      @else
        <p>Topbar yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
      @endif      
    </ul>
  </div><!-- /&_right -->    
</div><!-- /topbar -->