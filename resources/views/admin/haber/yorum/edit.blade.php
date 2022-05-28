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
              <label class="form-label" for="haber_id">Haber:</label>
              {{-- <input class="form-control" type="text" name="haber_id" value="{{$yorum->haber_id}}" /> --}}
              <select class="form-select form-control" name="haber_id" aria-label="Default select example">                
                @foreach ($habers as $item)                      
                  <option value="{{$item->id}}" {{ ($yorum->haber_id == $item->id) ? 'selected' : ''}}>{{$item->baslik}}</option>
                @endforeach                  
              </select>
              @error('haber_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
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
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="baslik">Başlık:</label>
              <input class="form-control" type="text" name="baslik" value="{{$yorum->baslik}}" />
              @error('baslik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="icerik">İçerik:</label>
              <input class="form-control" type="text" name="icerik" value="{{$yorum->icerik}}" />
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
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
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-6">
              <label class="form-label" for="admin">Admin:</label>
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