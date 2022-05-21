<h1>soru - Index</h1>
@if(count($sorus) == 0)
  <p>No data</p>  
  @else
    @foreach($sorus as $soru)            
    {{$soru->icerik_id}}      
    {{$soru->baslik}}
    {{$soru->aciklama}}
      <br>
      <a href="/admin/egitim/egitim_sorus/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitim_sorus/{{$soru->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitim_sorus/{{$soru->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitim_sorus/{{$soru->id}}">
        @csrf 
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif