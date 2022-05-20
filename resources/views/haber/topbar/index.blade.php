<h1>Topbar - Index</h1>
@if(count($topbars) == 0)
  <p>No data</p>  
  @else
    @foreach($topbars as $topbar)          
      {{$topbar->ad}}
      {{$topbar->link}}
      {{$topbar->aciklama}}
      {{$topbar->yer}}             
      <hr>
    @endforeach
@endif