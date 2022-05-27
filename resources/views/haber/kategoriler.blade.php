<x-haber_layout :topbars="$topbars" :kategoris="$kategoris" :sayfas="$sayfas" :fhabers="$fhabers" :sosyals="$sosyals">
  <x-haber_kategori_nav :kategoris="$kategoris"></x-haber_kategori_nav>  
  <x-haber_index_kategori :kategoris="$kategoris"></x-haber_index_kategori>
  <x-haber_bunlari_kacirma_yatay :kacirmas="$kacirmas"></x-haber_bunlari_kacirma_yatay>  
</x-haber_layout>