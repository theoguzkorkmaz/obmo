<h1>Sayfa - Index</h1>
@if(count($sayfas) == 0)
  <p>No data</p>  
  @else
    @foreach($sayfas as $sayfa)      
      <img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
      <br>
      {{$sayfa->ad}}
      {{$sayfa->icerik}}
      {{$sayfa->resim}}  
      {{$sayfa->navbar_gorunme}}
      {{$sayfa->footer_gorunme}}    
      <br>
      <a href="/admin/haber/haber_sayfas/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/haber/haber_sayfas/{{$sayfa->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/haber/haber_sayfas/{{$sayfa->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/haber/haber_sayfas/{{$sayfa->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif