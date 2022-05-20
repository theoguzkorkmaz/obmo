@props(['kategoris'])

<div class="container p-md-0" id="kategori_nav">    
  <ul class="gap-3">
    <li>
      <a href="/haber/kategoriler" class="active" title="Tüm kategoriler">Tüm kategoriler</a>
    </li>
    @if (count($kategoris) != 0)
      @foreach ($kategoris as $kategori)            
        <li>
          <a href="/haber/kategori_detay/{{$kategori->id}}" title="{{$kategori->ad}}">{{$kategori->ad}}</a>
        </li>
      @endforeach
    @else
      <p>Kategoriler yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
    @endif        
  </ul>
</div><!-- /kategori_nav -->