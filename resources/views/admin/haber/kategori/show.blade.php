<h1>Kategori - Show</h1>
          
{{$kategori->ad}}
{{$kategori->link}}
{{$kategori->aciklama}}
{{$kategori->resim}}
{{$kategori->resim_aciklama}}
{{$kategori->icon}} 
{{$kategori->navbar_gorunme}}
{{$kategori->footer_gorunme}} 
<br>
<img src="{{$kategori->resim ? asset('storage/'.$kategori->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    

<form method="POST" action="/admin/haber/haber_kategoris/{{$kategori->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>