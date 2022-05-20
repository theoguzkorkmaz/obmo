<h1>sinav - Index</h1>
@if(count($sinavs) == 0)
  <p>No data</p>  
  @else
    @foreach($sinavs as $sinav)            
    {{$sinav->icerik_id}}      
    {{$sinav->baslik}}
    {{$sinav->aciklama}}
      <br>
      <a href="/admin/egitim/egitim_sinavs/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitim_sinavs/{{$sinav->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitim_sinavs/{{$sinav->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitim_sinavs/{{$sinav->id}}">
        @csrf 
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif