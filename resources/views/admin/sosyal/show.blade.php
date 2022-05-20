<h1>Sosyal - Show</h1>
          
{{$sosyal->ad}}
{{$sosyal->icon}}
{{$sosyal->link}}
{{$sosyal->aciklama}}
{{$sosyal->aktiflik}}    

<form method="POST" action="/admin/sosyals/{{$sosyal->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>