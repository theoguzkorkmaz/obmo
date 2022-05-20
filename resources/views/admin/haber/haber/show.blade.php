<h1>Haber - Show</h1>
          
{{$haber->kategori_id}}
{{$haber->baslik}}
{{$haber->icerik}}
{{$haber->resim_aciklama}}
{{$haber->etiket}}      
<br>
<img src="{{$haber->resim ? asset('storage/'.$haber->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    

<form method="POST" action="/admin/haber/habers/{{$haber->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>