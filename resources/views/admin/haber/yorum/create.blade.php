@extends('admin.layout', ['navbars' => $navbars, 'title' => "Yorum", 'title2' => 'create', 'title_link' => '/admin/haber/haber_yorums', 'header' => "Yorum oluştur"])
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
        <form method="POST" action="/admin/haber/haber_yorums" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="haber_id">Haber:</label>
              {{-- <input class="form-control" type="text" name="haber_id" value="{{old('haber_id')}}" /> --}}
              <select class="form-select form-control" name="haber_id" aria-label="Default select example">
                <option selected disabled>Haberler</option>
                @foreach ($habers as $item)                      
                  <option value="{{$item->id}}">{{$item->baslik}}</option>
                @endforeach                  
              </select>
              @error('haber_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="user_id">Kullanıcı:</label>
              {{-- <input class="form-control" type="text" name="user_id" value="{{old('user_id')}}" /> --}}
              <select class="form-select form-control" name="user_id" aria-label="Default select example">
                <option selected disabled>Kullanıcı</option>
                @foreach ($users as $item)                      
                  <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach                  
              </select>
              @error('user_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="baslik">Başlık:</label>
              <input class="form-control" type="text" name="baslik" value="{{old('baslik')}}" />
              @error('baslik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              <input class="form-control" type="text" name="icerik" value="{{old('icerik')}}" />
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="onay">Onay:</label>
              {{-- <input class="form-control" type="text" name="onay" value="{{old('onay')}}" /> --}}
              <select class="form-select form-control" name="onay" aria-label="Default select example">                                
                <option selected disabled>Onay durumu</option>
                <option value="0">Onaysız</option>
                <option value="1">Onaylı</option>                
              </select>
              @error('onay')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
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
            <button type="submit" class="btn btn-primary">
              Oluştur
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