<h1>Haber - Index</h1>
@if(count($habers) == 0)
  <p>No data</p>  
  @else
    @foreach($habers as $haber)      
      <img src="{{$haber->resim ? asset('storage/'.$haber->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
      <br>
      {{$haber->kategori_id}}
      {{$haber->baslik}}
      {{$haber->icerik}}
      {{$haber->resim_aciklama}}
      {{$haber->etiket}}      
      <br>
      <a href="/admin/haber/habers/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/haber/habers/{{$haber->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/haber/habers/{{$haber->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/haber/habers/{{$haber->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif