<x-egitim_layout :navbars="$navbars">
  <h1 class="baslik fs-2">
    Selamlar {{auth()->user()->name}} 👋    
  </h1>
  
  <x-egitim_kategori :kategoris="$kategoris"></x-egitim_kategori>

  <x-egitim_dersler :egitims="$egitims" :eiceriks="$eiceriks"></x-egitim_dersler>

  <x-egitim_derslerim :megitims="$megitims" :eiceriks="$eiceriks"></x-egitim_derslerim> 

  <h1 class="baslik fs-2">
    İlk 5 sıralaması: 🏆    
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
</x-egitim_layout> 