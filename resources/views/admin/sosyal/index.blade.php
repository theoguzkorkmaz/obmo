<h1>Sosyal - Index</h1>
@if(count($sosyals) == 0)
  <p>No data</p>  
  @else
    @foreach($sosyals as $sosyal)          
      {{$sosyal->ad}}
      {{$sosyal->icon}}
      {{$sosyal->link}}
      {{$sosyal->aciklama}}
      {{$sosyal->aktiflik}}          
      <br>
      <a href="/admin/sosyals/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/sosyals/{{$sosyal->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/sosyals/{{$sosyal->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/sosyals/{{$sosyal->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif