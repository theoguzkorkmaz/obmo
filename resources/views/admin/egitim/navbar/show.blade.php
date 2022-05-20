<h1>navbar - Show</h1>
          
{{$navbar->ad}}   
{{$navbar->icon}}      
{{$navbar->link}}
{{$navbar->icerik}}
{{$navbar->ismenu}}

<form method="POST" action="/admin/egitim/egitim_navbars/{{$navbar->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form> 