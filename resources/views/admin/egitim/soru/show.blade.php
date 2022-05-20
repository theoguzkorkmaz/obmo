<h1>Soru - Show</h1>
          
{{$soru->sinav_id}}
{{$soru->soru_no}}
{{$soru->soru}}
{{$soru->resim}}
{{$soru->resim_aciklama}}
<br>
<img src="{{$soru->resim ? asset('storage/'.$soru->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    

<form method="POST" action="/admin/egitim/egitim_sorus/{{$soru->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>