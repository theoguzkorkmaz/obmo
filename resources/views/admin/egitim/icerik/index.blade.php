<h1>icerik - Index</h1>
@if(count($iceriks) == 0)
  <p>No data</p>  
  @else
    @foreach($iceriks as $icerik)            
      {{$icerik->egitim_id}}      
      {{$icerik->icerik_no}}
      {{$icerik->baslik}}             
      {{$icerik->aciklama}}             
      {{$icerik->puan}} 
      <br>
      <a href="/admin/egitim/egitim_iceriks/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitim_iceriks/{{$icerik->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitim_iceriks/{{$icerik->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitim_iceriks/{{$icerik->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif