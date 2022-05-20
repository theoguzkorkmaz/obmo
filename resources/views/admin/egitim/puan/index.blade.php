<h1>puan - Index</h1>
@if(count($puans) == 0)
  <p>No data</p>  
  @else
    @foreach($puans as $puan)            
    {{$puan->sinav_id}}      
    {{$puan->dogru_sayisi}}
    {{$puan->yanlis_sayisi}}
    {{$puan->puan}}
      <br>
      <a href="/admin/egitim/egitim_puans/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitim_puans/{{$puan->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitim_puans/{{$puan->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitim_puans/{{$puan->id}}">
        @csrf 
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif