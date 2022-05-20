<h1>Topbar - Show</h1>
          
{{$topbar->ad}}
{{$topbar->link}}
{{$topbar->aciklama}}
{{$topbar->yer}}
{{$topbar->icon}}     

<form method="POST" action="/admin/haber/haber_topbars/{{$topbar->id}}">
  @csrf
  @method('DELETE')
  <button>
      Sil
  </button>
</form>