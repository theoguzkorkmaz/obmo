@extends('admin.layout', ['navbars' => $navbars, 'title' => "Haber", 'title2' => 'index', 'title_link' => '/admin/haber/habers', 'header' => "Haberler"])
@section('content')

<div class="row">
  @if(count($habers) == 0)
    <div class="card bg-transparent shadow-none w-50 text-center p-4">
      <div class="d-flex flex-row justify-content-between">
        <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
        <a class="btn btn-danger" href="/admin/haber/habers/olustur" role="button">Veri ekle <i class="far fa-plus-square ml-3"></i></a>
      </div>
      <div class="bg-dark mt-2 p-3 rounded">
        <h4 class="text-danger"><i class="fas fa-times"></i></h4>
        <p class="mb-0">Henüz veri girişi yapılmamıştır.</p>
      </div>
    </div> 
    @else
    <div class="col-md-12 col-12 d-flex justify-content-end px-2">
      <a href="/admin/haber/habers/olustur" class="btn btn-danger btn-md mb-4 w-25">
        Yeni haber ekle
      </a>
    </div>
      @foreach($habers as $haber)  
      <div class="col-md-4">
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">{!! substr(strip_tags($haber->baslik), 0, 30) !!}</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body p-2">
            <table class="table table-bordered">
              <tr>
                <td><strong class="fs-5">Başlık:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($haber->baslik, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">İçerik:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($haber->icerik, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">Resim:</strong></td>
                <td style="font-size: 0.85rem">
                  <img src="{{$haber->resim ? asset('storage/'.$haber->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/haber/habers/{{$haber->id}}" class="btn btn-primary btn-xs w-100">
                    Detaylı gör
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/haber/habers/{{$haber->id}}/guncelle" class="btn btn-warning btn-xs w-100">
                    Güncelle
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <form method="POST" action="/admin/haber/habers/{{$haber->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-xs w-100">
                        Sil
                    </button>
                  </form>
                </td>
              </tr>
            </table>
            
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      @endforeach
    @endif      
</div>  

<div class="row px-2 text-white">
  {{$habers->links()}}
</div>
@endsection