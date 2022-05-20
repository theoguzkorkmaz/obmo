<h1>navbar - Index</h1>
@if(count($navbars) == 0)
  <p>No data</p>  
  @else
    @foreach($navbars as $navbar)          
      {{$navbar->ad}}   
      {{$navbar->icon}}      
      {{$navbar->link}}
      {{$navbar->icerik}}
      {{$navbar->ismenu}}         
      <hr>
    @endforeach
@endif