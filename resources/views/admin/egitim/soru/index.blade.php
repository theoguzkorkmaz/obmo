@extends('admin.layout', ['navbars' => $navbars, 'title' => "Soru", 'title2' => 'index', 'title_link' => '/admin/egitim/egitim_sorus', 'header' => "Soru verileri"])
@section('content')

<div class="row d-flex justify-content-end px-2">
  <a href="/admin/egitim/egitim_sorus/olustur" class="btn btn-danger btn-md mb-4 w-25">
    Yeni soru ekle
  </a>
</div>

<div class="row">
  @if(count($sorus) == 0)
    <p>No data</p>  
    @else
      @foreach($sorus as $item)  
      <div class="col-md-4">
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">{{Str::limit($item->soru, 25)}}</h3>

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
                <td><strong class="fs-5">Sınav:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($item->sinav_id, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">Soru no:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($item->soru_no, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">Soru:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($item->soru, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">Resim:</strong></td>
                <td style="font-size: 0.85rem">
                  <img src="{{$item->resim ? asset('storage/'.$item->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/egitim/egitim_sorus/{{$item->id}}" class="btn btn-primary btn-xs w-100">
                    Detaylı gör
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/egitim/egitim_sorus/{{$item->id}}/guncelle" class="btn btn-warning btn-xs w-100">
                    Güncelle
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <form method="POST" action="/admin/egitim/egitim_sorus/{{$item->id}}">
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
  {{$sorus->links()}}
</div>
@endsection