<h1>puan - Show</h1>
          
{{$puan->sinav_id}}      
{{$puan->dogru_sayisi}}
{{$puan->yanlis_sayisi}}
{{$puan->puan}}

<form method="POST" action="/admin/egitim/egitim_puans/{{$puan->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form> 