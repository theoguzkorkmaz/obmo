@extends('admin.layout', ['navbars' => $navbars, 'title' => "Topbar", 'title2' => 'show', 'title_link' => '/admin/haber/haber_topbars', 'header' => "Topbar verisi: {$topbar->ad}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Ad:</strong></td>
      <td><p style="font-size: 0.9rem">{{$topbar->ad}}</p></td>
    </tr>
    <tr>
      <td><strong>Link:</strong></td>
      <td><p style="font-size: 0.9rem">{{$topbar->link}}</p></td>
    </tr>
    <tr>
      <td><strong>Açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$topbar->aciklama}}</p></td>
    </tr>
    <tr>
      <td><strong>Yer:</strong></td>
      <td>
        @if (($topbar->yer) == 0)
          <p>Topbar menü sol taraf</p>
        @else
          <p>Topbar menü sağ taraf</p>
        @endif
      </td>
    </tr>
    <tr>
      <td><strong>Icon:</strong></td>
      <td><p class="{{$topbar->icon}}"></p></td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/haber/haber_topbars/{{$topbar->id}}" class="w-100">
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
        <a href="/admin/haber/haber_topbars/{{$topbar->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection