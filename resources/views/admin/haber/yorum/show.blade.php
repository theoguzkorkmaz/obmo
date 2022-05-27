@extends('admin.layout', ['navbars' => $navbars, 'title' => "Yorum", 'title2' => 'show', 'title_link' => '/admin/haber/yorum_yorums', 'header' => "Yorum verisi: {$yorum->baslik}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Haber:</strong></td>
      <td><p style="font-size: 0.9rem">{{$yorum->haber_id}}</p></td>
    </tr>
    <tr>
      <td><strong>Kullanıcı:</strong></td>
      <td><p style="font-size: 0.9rem">{{$yorum->user_id}}</p></td>
    </tr>
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p style="font-size: 0.9rem">{{$yorum->baslik}}</p></td>
    </tr>
    <tr>
      <td><strong>İçerik:</strong></td>
      <td><p style="font-size: 0.9rem">{{$yorum->icerik}}</p></td>
    </tr>
    <tr>
      <td><strong>Onay durumu:</strong></td>
      <td>
        @if (($yorum->onay) == 0)
          <p style="font-size: 0.9rem">Onaylanmadı</p>
        @else
          <p style="font-size: 0.9rem">Onaylı</p>
        @endif
      </td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/haber/haber_yorums/{{$yorum->id}}" class="w-100">
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
        <a href="/admin/haber/haber_yorums/{{$yorum->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection