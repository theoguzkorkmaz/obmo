@extends('admin.layout', ['navbars' => $navbars, 'title' => "Adminlik", 'title2' => 'index', 'title_link' => '/admin/adminlik', 'header' => "Adminlik"])
@section('content')
<div class="container-fluid">

    <div class="row">
    @if(count($users) == 0)
      <p>No data</p>  
      @else
        @foreach($users as $item)  
        <div class="col-md-4">
          <div class="card card-primary collapsed-card">
            <div class="card-header">
              <h3 class="card-title">{!! substr(strip_tags($item->name), 0, 30) !!}</h3>

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
                  <td><strong class="fs-5">Cinsiyet:</strong></td>
                  <td style="font-size: 0.85rem">
                    {{Str::limit($item->gender, 100)}}
                  </td>
                </tr>
                <tr>
                  <td><strong class="fs-5">Şehir:</strong></td>
                  <td style="font-size: 0.85rem">
                    {{Str::limit($item->city, 100)}}
                  </td>
                </tr>
                <tr>
                  <td><strong class="fs-5">Puan:</strong></td>
                  <td style="font-size: 0.85rem">
                    {{Str::limit($item->point, 100)}}
                  </td>
                </tr>
                <tr>
                  <td><strong class="fs-5">Kullanıcı türü:</strong></td>
                  <td style="font-size: 0.85rem">
                    {{Str::limit($item->user_type, 100)}}
                  </td>
                </tr>
                <tr>
                  <td><strong class="fs-5">E-mail:</strong></td>
                  <td style="font-size: 0.85rem">
                    {{Str::limit($item->email, 100)}}
                  </td>
                </tr>
                <tr>
                  <td><strong class="fs-5">Giriş:</strong></td>
                  <td style="font-size: 0.85rem">
                    {{Str::limit($item->created_at, 100)}}
                  </td>
                </tr>                
                <tr>    
                  @if ($item->user_type == 'Administrator')
                    <td style="font-size: 0.85rem" colspan="2">
                      <p class="bg-danger text-center btn-xs w-100 mb-0">
                        Kişi admindir
                      </p>
                    </td> 
                  @else
                    <td style="font-size: 0.85rem" colspan="2">
                      <form action="/admin/adminlik" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$item->id}}">
                        <button type="submit" class="btn btn-warning btn-xs w-100">
                          Admin yap
                        </button>
                      </form>
                    </td>
                  @endif 
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
</div>
@endsection