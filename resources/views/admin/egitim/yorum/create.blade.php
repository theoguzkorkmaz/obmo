@extends('admin.layout', ['navbars' => $navbars, 'title' => "Yorum", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_yorums', 'header' => "Yorum oluştur"])
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
        <form method="POST" action="/admin/egitim/egitim_yorums" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="egitim_id">Eğitim:</label>
              {{-- <input class="form-control" type="text" name="egitim_id" value="{{old('egitim_id')}}" />  --}}
              <select class="form-select form-control" name="egitim_id" aria-label="Default select example">
                <option selected disabled>Eğitimler</option>
                @foreach ($egitims as $item)                      
                  <option value="{{$item->id}}">{{$item->baslik}}</option>
                @endforeach                   
              </select>
              @error('egitim_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="kullanici_id">Kullanıcı:</label>
                {{-- <input class="form-control" type="text" name="kullanici_id" value="{{old('kullanici_id')}}" /> --}}
                <select class="form-select form-control" name="kullanici_id" aria-label="Default select example">
                  <option selected disabled>Kullanıcılar</option>
                  @foreach ($users as $item)                      
                    <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach                   
                </select>
                @error('kullanici_id')
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