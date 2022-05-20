<h1>Topbar - Show</h1>
          
{{$yorum->haber_id}}
{{$yorum->user_id}}
{{$yorum->baslik}}
{{$yorum->icerik}}
{{$yorum->onay}} 

<form method="POST" action="/admin/haber/haber_yorums/{{$yorum->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>