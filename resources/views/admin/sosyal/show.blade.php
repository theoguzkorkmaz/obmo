@extends('admin.layout', ['navbars' => $navbars, 'title' => "Medya", 'title2' => 'show', 'title_link' => '/admin/sosyals', 'header' => "Medya verisi: {$sosyal->ad}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Ad:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sosyal->ad}}</p></td>
    </tr> 
    <tr>
      <td><strong>Icon:</strong></td>
      <td><ii class="{{$sosyal->icon}}"></i></td>
    </tr> 
    <tr>
      <td><strong>Link:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sosyal->link}}</p></td>
    </tr> 
    <tr>
      <td><strong>Açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sosyal->aciklama}}</p></td>
    </tr> 
    <tr>
      <td><strong>Aktiflik durumu:</strong></td>
      <td>
        @if (($sosyal->aktiflik) == 0)
          <p style="font-size: 0.9rem">Aktif değil</p>
        @else
          <p style="font-size: 0.9rem">Aktif</p>
        @endif
      </td>
    </tr>  
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/sosyals/{{$sosyal->id}}" class="w-100">
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
        <a href="/admin/sosyals/{{$sosyal->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection