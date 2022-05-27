@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sınav", 'title2' => 'show', 'title_link' => '/admin/egitim/egitim_sinavs', 'header' => "Sınav verisi: {$sinav->baslik}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>İçerik:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sinav->icerik_id}}</p></td>
    </tr> 
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sinav->baslik}}</p></td>
    </tr> 
    <tr>
      <td><strong>Açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sinav->aciklama}}</p></td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/egitim/egitim_sinavs/{{$sinav->id}}" class="w-100">
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
        <a href="/admin/egitim/egitim_sinavs/{{$sinav->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection