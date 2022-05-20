<h1>icerik - Show</h1>
          
{{$icerik->egitim_id}}      
{{$icerik->icerik_no}}
{{$icerik->baslik}}             
{{$icerik->aciklama}}             
{{$icerik->puan}} 

<form method="POST" action="/admin/egitim/egitim_iceriks/{{$icerik->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>