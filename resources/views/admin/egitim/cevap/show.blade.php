@extends('admin.layout', ['navbars' => $navbars, 'title' => "Cevap", 'title2' => 'show', 'title_link' => '/admin/egitim/egitim_cevaps', 'header' => "Cevap verisi: $cevap->icerik"])
@section('content')

  <table class="table table-bordered">
    <tr>
      <td><strong>Soru id:</strong></td>
      <td><p style="font-size: 0.9rem">{{$cevap->soru_id}}</p></td>
    </tr>
    <tr>
      <td><strong>Cevap no:</strong></td>
      <td><p style="font-size: 0.9rem">{{$cevap->cevap_no}}</p></td>
    </tr>
    <tr>
      <td><strong>İçerik</strong>:</td>
      <td><p style="font-size: 0.9rem">{!! $cevap->icerik !!}</p></td> 
    </tr>
    <tr>
      <td><strong>Doğru:</strong></td>
      <td><p style="font-size: 0.9rem">{{$cevap->dogru}}</p></td>
    </tr>
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/egitim/egitim_cevaps/{{$cevap->id}}" class="w-100">
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
        <a href="/admin/egitim/egitim_cevaps/{{$cevap->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection