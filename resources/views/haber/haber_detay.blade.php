{{-- {{$haber->id}}
{{$haber->baslik}}
{{$haber->ad}} --}}

{{-- @foreach ($yorums as $item)
    {{$item->id}}
    {{$item->baslik}}
    deneme
@endforeach --}}

<x-haber_layout :topbars="$topbars" :kategoris="$kategoris" :sayfas="$sayfas" :fhabers="$fhabers" :sosyals="$sosyals">
   <x-haber_detay_header :haber="$haber" :yazar="$yazar"></x-haber_detay_header>
   <div class="container p-md-0">
    <div class="row">
      <main class="col-md-8">
        <img src="{!! $haber2->resim ? asset('storage/'.$haber2->resim) : asset('/images/no-image.png') !!}" alt="{{$haber2->baslik}}" class="w-100 rounded"/>  
        <x-haber_detay_detay :haber="$haber"></x-haber_detay_detay>        
        <x-haber_detay_yorum :yorums="$yorums" :habert="$habert"></x-haber_detay_yorum>
      </main> <!-- /main -->
      <article class="col-md-4" id="detay_article">        
        <x-haber_detay_kacirma :kacirmas="$kacirmas"></x-haber_detay_kacirma>                  
      </article> <!-- /article -->
    </div>
  </div><!-- main-container -->
</x-haber_layout> 