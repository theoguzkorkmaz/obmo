<h1>yorum - Index</h1>
@if(count($yorums) == 0)
  <p>No data</p>  
  @else
    @foreach($yorums as $yorum)            
      {{$yorum->egitim_id}}
      {{$yorum->kullanici_id}}
      {{$yorum->baslik}}
      {{$yorum->icerik}}
      <br>
      <a href="/admin/egitim/egitim_yorums/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitim_yorums/{{$yorum->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitim_yorums/{{$yorum->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitim_yorums/{{$yorum->id}}">
        @csrf
        @method('DELETE') 
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif