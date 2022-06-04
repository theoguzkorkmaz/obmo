@extends('admin.layout', ['navbars' => $navbars, 'title' => "Yorum", 'title2' => 'update', 'title_link' => '/admin/haber/haber_yorums', 'header' => "Yorum güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/haber/haber_yorums" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Yorum güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/haber/haber_yorums/{{$yorum->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-6">
              <label class="form-label" for="haber_id">Haber:</label>
              {{-- <input class="form-control" type="text" name="haber_id" value="{{$yorum->haber_id}}" /> --}}
              <select class="form-select form-control" name="haber_id" aria-label="Default select example">                
                @foreach ($habers as $item)                      
                  <option value="{{$item->id}}" {{ ($yorum->haber_id == $item->id) ? 'selected' : ''}}>{{$item->baslik}}</option>
                @endforeach                  
              </select>
              @error('haber_id')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="user_id">Kullanıcı:</label>
              {{-- <input class="form-control" type="text" name="user_id" value="{{$yorum->user_id}}" /> --}}
              <select class="form-select form-control" name="user_id" aria-label="Default select example">                
                @foreach ($users as $item)                      
                  <option value="{{$item->id}}" {{ ($yorum->user_id == $item->id) ? 'selected' : ''}}>{{$item->name}}</option>
                @endforeach                  
              </select>
              @error('user_id')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="baslik">Başlık:</label>
              <input class="form-control" type="text" name="baslik" value="{{$yorum->baslik}}" />
              @error('baslik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="icerik">İçerik:</label>
              <input class="form-control" type="text" name="icerik" value="{{$yorum->icerik}}" />
              @error('icerik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="onay">Onay:</label>
              {{-- <input class="form-control" type="text" name="onay" value="{{$yorum->onay}}" /> --}}
              <select class="form-select form-control" name="onay" aria-label="Default select example">                                
                <option value="0" {{ ($yorum->onay == 0) ? 'selected' : ''}}>Onaysız</option>
                <option value="1" {{ ($yorum->onay == 1) ? 'selected' : ''}}>Onaylı</option>                
              </select>
              @error('onay')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="admin">Admin:</label>
              <input class="form-control" type="text" name="admin" value="{{auth()->user()->id}}" readonly />
              <small>Bu veri <b>{{auth()->user()->name}}</b> tarafından oluşturulacak</small>
              @error('admin')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>

          </div>
          <!-- /.card-body -->
  
          <div class="card-footer">             
            <div class="w-100 d-flex flex-row justify-content-between">
              <button type="reset" class="btn btn-danger w-25">              
                Temizle
                <i class="fa fa-trash ml-3" aria-hidden="true"></i>
              </button> 
              <button type="submit" class="btn btn-primary w-25">
                <i class="fa fa-plus-square mr-3" aria-hidden="true"></i>
                Güncelle
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection