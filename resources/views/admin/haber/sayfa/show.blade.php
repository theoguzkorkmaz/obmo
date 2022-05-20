<h1>Sayfa - Show</h1>
          
<img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
<br>
{{$sayfa->ad}}
{{$sayfa->icerik}}
{{$sayfa->resim}} 
{{$sayfa->navbar_gorunme}}
{{$sayfa->footer_gorunme}}   

<form method="POST" action="/admin//haber/haber_sayfas/{{$sayfa->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>