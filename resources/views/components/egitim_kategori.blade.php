<ul class="list-group list-group-horizontal mt-3" id="header-list">
  <li class="list-group-item border-0 p-0">
    <a href="/egitim/kategoriler" class="fs-6" title="Tüm kategoriler için tıklayın">
      Tüm kategoriler
    </a>
  </li>
  @foreach ($kategoris as $item)
    <li class="list-group-item border-0 p-0">
      <a href="/egitim/kategori_detay/{{$item->id}}" class="fs-6" title="{{$item->aciklama}}">
        <i class="{{$item->icon}} me-2"></i>
        {{$item->baslik}}
      </a>
    </li>
  @endforeach
</ul>