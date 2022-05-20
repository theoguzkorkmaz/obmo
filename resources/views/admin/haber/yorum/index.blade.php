<h1>Yorum - Index</h1>
@if(count($yorums) == 0)
  <p>No data</p>  
  @else
    @foreach($yorums as $yorum)          
      {{$yorum->haber_id}}
      {{$yorum->user_id}}
      {{$yorum->baslik}}
      {{$yorum->icerik}}
      {{$yorum->onay}}       
      <br>
      <a href="/admin/haber/haber_yorums/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/haber/haber_yorums/{{$yorum->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/haber/haber_yorums/{{$yorum->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/haber/haber_yorums/{{$yorum->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif