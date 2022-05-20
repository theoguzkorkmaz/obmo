<h1>cevap - Show</h1>
          
{{$cevap->soru_id}}      
{{$cevap->cevap_no}}
{{$cevap->icerik}}
{{$cevap->dogru}}

<form method="POST" action="/admin/egitim/egitim_cevaps/{{$cevap->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form> 