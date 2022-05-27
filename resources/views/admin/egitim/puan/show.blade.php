@extends('admin.layout', ['navbars' => $navbars, 'title' => "Puan", 'title2' => 'show', 'title_link' => '/admin/egitim/egitim_puans', 'header' => "Puan verisi"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Sınav:</strong></td>
      <td><p style="font-size: 0.9rem">{{$puan->sinav_id}}</p></td>
    </tr>
    <tr>
      <td><strong>Doğru sayısı:</strong></td>
      <td><p style="font-size: 0.9rem">{{$puan->dogru_sayisi}}</p></td>
    </tr>
    <tr>
      <td><strong>Yanlış sayısı:</strong></td>
      <td><p style="font-size: 0.9rem">{{$puan->yanlis_sayisi}}</p></td>
    </tr>
    <tr>
      <td><strong>Puank:</strong></td>
      <td><p style="font-size: 0.9rem">{{$puan->puan}}</p></td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/egitim/egitim_puans/{{$puan->id}}" class="w-100">
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
        <a href="/admin/egitim/egitim_puans/{{$puan->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection