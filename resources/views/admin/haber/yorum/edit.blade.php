@extends('admin.layout', ['navbars' => $navbars, 'title' => "Yorum", 'title2' => 'update', 'title_link' => '/admin/haber/haber_yorums', 'header' => "Yorum güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-7 col-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/haber/haber_yorums/{{$yorum->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-6">
              <label class="form-label" for="haber_id">Haber_id</label>
              <input class="form-control" type="text" name="haber_id" value="{{$yorum->haber_id}}" />
              @error('haber_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="user_id">user_id</label>
              <input class="form-control" type="text" name="user_id" value="{{$yorum->user_id}}" />
              @error('user_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="baslik">baslik</label>
              <input class="form-control" type="text" name="baslik" value="{{$yorum->baslik}}" />
              @error('baslik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="icerik">icerik</label>
              <input class="form-control" type="text" name="icerik" value="{{$yorum->icerik}}" />
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="onay">onay</label>
              <input class="form-control" type="text" name="onay" value="{{$yorum->onay}}" />
              @error('onay')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="admin">admin</label>
              <input class="form-control" type="text" name="admin" value="{{auth()->user()->id}}" readonly />
              <small>Bu veri <b>{{auth()->user()->name}}</b> tarafından oluşturulacak</small>
              @error('admin')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>

          </div>
          <!-- /.card-body -->
  
          <div class="card-footer w-100">
            <button type="submit" class="btn btn-warning">
              Güncelle
            </button> 
            <button type="reset" class="btn btn-danger">
              Formu temizle
            </button> 
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection