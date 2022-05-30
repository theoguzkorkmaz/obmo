<x-egitim_layout :navbars="$navbars">
  <h1 class="baslik fs-2">
    Sıralamalar: 🏆    
  </h1>

@php
  $i=0;    
@endphp

  <table class="table table-bordered w-50 my-4">
    @foreach ($tops as $item)
      @php
          $i++;
      @endphp
      <tr class="{{ (($item->id) == auth()->user()->id) ? 'text-white bg-secondary' : ''}}">
        <td>
          <strong>{{$i}}. kişi:</strong>
        </td>
        <td>        
          <h5 class="fs-5">
            <strong>{{$item->name}}</strong>
          </h5>
        </td>
        <td>
          puanı: <strong>{{$item->point}}</strong>
        </td>
      </tr>      
    @endforeach
  </table>
  
</x-egitim_layout>