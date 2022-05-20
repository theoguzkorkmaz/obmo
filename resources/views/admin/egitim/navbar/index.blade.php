<h1>navbar - Index</h1>
@if(count($navbars) == 0)
  <p>No data</p>  
  @else
    @foreach($navbars as $navbar)            
    {{$navbar->ad}}   
      {{$navbar->icon}}      
      {{$navbar->link}}
      {{$navbar->icerik}}
      {{$navbar->ismenu}}
      <br>
      <a href="/admin/egitim/egitim_navbars/olustur">
        Ekle
      </a>
      <br>
      <a href="/admin/egitim/egitim_navbars/{{$navbar->id}}/guncelle">
        Güncelle
      </a>
      <br>
      <a href="/admin/egitim/egitim_navbars/{{$navbar->id}}">
        Detaylı gör Show
      </a>
      <br>
      <form method="POST" action="/admin/egitim/egitim_navbars/{{$navbar->id}}">
        @csrf 
        @method('DELETE')
        <button>
            Sil
        </button>
      </form>      
      <hr>
    @endforeach
@endif