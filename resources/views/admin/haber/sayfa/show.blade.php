@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sayfa", 'title2' => 'show', 'title_link' => '/admin/haber/haber_sayfas', 'header' => "Sayfa verisi: {$sayfa->ad}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Ad:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sayfa->ad}}</p></td>
    </tr> 
    <tr>
      <td><strong>İçerik:</strong></td>
      <td><p style="font-size: 0.9rem">{{$sayfa->icerik}}</p></td>
    </tr> 
    <tr>
      <td><strong>Resim:</strong></td>
      <td><img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    </td>
    </tr> 
    <tr>
      <td><strong>Navbar:</strong></td>
      <td>
        @if (($sayfa->navbar_gorunme) == 0)
          <p style="font-size: 0.9rem">Navbarda gizlidir.</p>
        @else
          <p style="font-size: 0.9rem">Navbarda görünmektedir.</p>
        @endif
      </td>
    </tr> 
    <tr>
      <td><strong>Footer:</strong></td>
      <td>
        @if (($sayfa->footer_gorunme) == 0)
          <p style="font-size: 0.9rem">Footerda gizlidir.</p>
        @else
          <p style="font-size: 0.9rem">Footerda görünmektedir.</p>
        @endif
      </td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin//haber/haber_sayfas/{{$sayfa->id}}" class="w-100">
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
        <a href="/admin/haber/haber_sayfas/{{$sayfa->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection