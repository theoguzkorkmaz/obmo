<h1>Soru - Index</h1>
@if(count($sorus) == 0)
  <p>No data</p>  
  @else
    @foreach($sorus as $soru)      
      <img src="{{$soru->resim ? asset('storage/'.$soru->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
      <br>
      {{$soru->sinav_id}}
      {{$soru->soru_no}}
      {{$soru->soru}}
      {{$soru->resim}}
      {{$soru->resim_aciklama}}
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