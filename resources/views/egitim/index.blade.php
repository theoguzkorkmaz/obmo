<x-egitim_layout :navbars="$navbars">
  <h1 class="baslik fs-2">
    Selamlar {{auth()->user()->name}} 👋
  </h1>
  
  <x-egitim_kategori :kategoris="$kategoris"></x-egitim_kategori>

  <x-egitim_dersler :egitims="$egitims"></x-egitim_dersler>

  <x-egitim_derslerim :megitims="$megitims"></x-egitim_derslerim>
</x-egitim_layout> 