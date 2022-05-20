<h1>Kategori - Index</h1>
@if(count($kategoris) == 0)
  <p>No data</p>  
  @else
    @foreach($kategoris as $kategori)      
      <img src="{{$kategori->resim ? asset('storage/'.$kategori->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
      <br>
      {{$kategori->ad}}
      {{$kategori->link}}
      {{$kategori->aciklama}}
      {{$kategori->resim}}
      {{$kategori->resim_aciklama}}
      {{$kategori->icon}}
      {{$kategori->navbar_gorunme}}
      {{$kategori->footer_gorunme}} 
      <br>
      <a href="/admin/haber/haber_kategoris/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/haber/haber_kategoris/{{$kategori->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/haber/haber_kategoris/{{$kategori->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/haber/haber_kategoris/{{$kategori->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif