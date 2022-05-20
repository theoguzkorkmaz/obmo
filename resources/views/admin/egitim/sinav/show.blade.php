<h1>sinav - Show</h1>
          
{{$sinav->icerik_id}}      
{{$sinav->baslik}}
{{$sinav->aciklama}}

<form method="POST" action="/admin/egitim/egitim_sinavs/{{$sinav->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form> 