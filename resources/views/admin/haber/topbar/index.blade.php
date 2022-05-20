<h1>Topbar - Index</h1>
@if(count($topbars) == 0)
  <p>No data</p>  
  @else
    @foreach($topbars as $topbar)          
      {{$topbar->ad}}
      {{$topbar->link}}
      {{$topbar->aciklama}}
      {{$topbar->yer}}  
      {{$topbar->icon}}      
      <br>
      <a href="/admin/haber/haber_topbars/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/haber/haber_topbars/{{$topbar->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/haber/haber_topbars/{{$topbar->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/haber/haber_topbars/{{$topbar->id}}">
        @csrf
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif