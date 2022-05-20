<h1>egitim - Show</h1>
          
{{$egitim->kategori_id}}
{{$egitim->baslik}}
{{$egitim->icerik}}
{{$egitim->resim_aciklama}}
{{$egitim->etiket}}      
<br>
<img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    

<form method="POST" action="/admin/egitim/egitims/{{$egitim->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>