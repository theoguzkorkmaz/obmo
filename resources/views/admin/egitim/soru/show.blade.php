@extends('admin.layout', ['navbars' => $navbars, 'title' => "Soru", 'title2' => 'show', 'title_link' => '/admin/egitim/egitim_sorus', 'header' => "Soru verisi: {$soru->soru}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Sınav:</strong></td>
      <td><p style="font-size: 0.9rem">{{$soru->sinav_id}}</p></td>
    </tr>
    <tr>
      <td><strong>Soru no:</strong></td>
      <td><p style="font-size: 0.9rem">{{$soru->soru_no}}</p></td>
    </tr>
    <tr>
      <td><strong>Soru:</strong></td>
      <td><p style="font-size: 0.9rem">{{$soru->soru}}</p></td>
    </tr>
    <tr>
      <td><strong>Resim:</strong></td>
      <td><img src="{{$soru->resim ? asset('storage/'.$soru->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    </td>
    </tr>
    <tr>
      <td><strong>Resim açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$soru->resim_aciklama}}</p></td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/egitim/egitim_sorus/{{$soru->id}}" class="w-100">
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
        <a href="/admin/egitim/egitim_sorus/{{$soru->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection