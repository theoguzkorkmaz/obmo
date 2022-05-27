{{-- index-sayfasi --}}

{{-- @foreach ($sosyals as $item)
    {{$item->id}}
    {{$item->baslik}}
    {{$item->ad}}
    <br>
@endforeach --}}

<x-haber_layout :topbars="$topbars" :kategoris="$kategoris" :sayfas="$sayfas" :fhabers="$fhabers" :sosyals="$sosyals">
  <x-haber_kategori_nav :kategoris="$kategoris"></x-haber_kategori_nav>
  <x-haber_carousel :gundem="$gundem" :gundems="$gundems" :basliks="$basliks"></x-haber_carousel>
  <x-haber_index_haberler :habers="$habers"></x-haber_index_haberler>
  <x-haber_bunlari_kacirma_yatay :kacirmas="$kacirmas"></x-haber_bunlari_kacirma_yatay>  
</x-haber_layout>