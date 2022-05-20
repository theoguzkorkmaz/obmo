<h1>cevap - Index</h1>
@if(count($cevaps) == 0)
  <p>No data</p>  
  @else
    @foreach($cevaps as $cevap)            
    {{$cevap->soru_id}}      
    {{$cevap->cevap_no}}
    {{$cevap->icerik}}
    {{$cevap->dogru}}
      <br>
      <a href="/admin/egitim/egitim_cevaps/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitim_cevaps/{{$cevap->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitim_cevaps/{{$cevap->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitim_cevaps/{{$cevap->id}}">
        @csrf 
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif