<ul class="list-group list-group-horizontal mt-3" id="header-list">
  <li class="list-group-item border-0 p-0">
    <a href="/egitim/kategoriler" title="Tüm kategoriler için tıklayın">
      Tüm kategoriler
    </a>
  </li>
  @foreach ($kategoris as $item)
    <li class="list-group-item border-0 p-0">
      <a href="/egitim/kategori_detay/{{$item->id}}" title="{{$item->aciklama}}">
        <i class="{{$item->icon}}"></i>
        {{$item->baslik}}
      </a>
    </li>
  @endforeach
</ul>