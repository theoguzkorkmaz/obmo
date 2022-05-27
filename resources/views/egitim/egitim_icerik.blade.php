<x-egitim_layout :navbars="$navbars">  
  <h2 class="baslik">{{$egitim->baslik}}</h2>

  @php
      print($egitim);
      print('<hr>');
      print($egitmen);
  @endphp
</x-egitim_layout>