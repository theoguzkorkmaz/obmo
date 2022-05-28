@extends('admin.layout', ['navbars' => $navbars, 'title' => "Navbar", 'title2' => 'show', 'title_link' => '/admin/egitim/egitim_navbars', 'header' => "Navbar verisi: {$navbar->ad}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p style="font-size: 0.9rem">{{$navbar->ad}}</p></td>
    </tr> 
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p class="{{$navbar->icon}}"></i></td>
    </tr> 
    <tr>
      <td><strong>Link:</strong></td>
      <td><p style="font-size: 0.9rem">{{$navbar->link}}</p></td>
    </tr> 
    <tr>
      <td><strong>İçerik:</strong></td>
      <td><p style="font-size: 0.9rem">{{$navbar->icerik}}</p></td>
    </tr> 
    <tr>
      <td><strong>Menü tür:</strong></td>
      <td>
        @if (($navbar->ismenu) == 0)
          <p style="font-size: 0.9rem">Diğer kısmında</p>
        @else
          <p style="font-size: 0.9rem">Menü kısmında</p>
        @endif
      </td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/egitim/egitim_navbars/{{$navbar->id}}" class="w-100">
          @csrf
          @method('DELETE')
          <button class="btn btn-xs bg-danger w-100">
              Sil
          </button>
        </form> 
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <a href="/admin/egitim/egitim_navbars/{{$navbar->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection