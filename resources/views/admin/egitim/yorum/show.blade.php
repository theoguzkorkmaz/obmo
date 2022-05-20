<h1>yorum - Show</h1>
          
{{$yorum->egitim_id}}
{{$yorum->kullanici_id}}
{{$yorum->baslik}}
{{$yorum->icerik}}
<br>

<form method="POST" action="/admin/egitim/egitim_yorums/{{$yorum->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>