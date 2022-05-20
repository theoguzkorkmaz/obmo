<h1>egitim - Index</h1>
@if(count($egitims) == 0)
  <p>No data</p>  
  @else
    @foreach($egitims as $egitim)      
      <img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
      <br>
      {{$egitim->kategori_id}}
      {{$egitim->baslik}}
      {{$egitim->icerik}}
      {{$egitim->resim_aciklama}}
      {{$egitim->etiket}}  
      {{$egitim->kitle}}
      {{$egitim->kazanim}}
      {{$egitim->dokuman}}      
      {{$egitim->sss}}       
      <br>
      <a href="/admin/egitim/egitims/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitims/{{$egitim->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitims/{{$egitim->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitims/{{$egitim->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif