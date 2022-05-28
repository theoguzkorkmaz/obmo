@extends('admin.layout', ['navbars' => $navbars, 'title' => "Yorum", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_yorums', 'header' => "Yorum güncelle"])
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
        <form method="POST" action="/admin/egitim/egitim_yorums/{{$yorum->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="egitim_id">egitim_id</label>
              {{-- <input class="form-control" type="text" name="egitim_id" value="{{$yorum->egitim_id}}" /> --}}
              <select class="form-select form-control" name="egitim_id" aria-label="Default select example">                
                @foreach ($egitims as $item)                      
                  <option value="{{$item->id}}" {{ ($yorum->egitim_id == $item->id) ? 'selected' : ''}}>{{$item->baslik}}</option>
                @endforeach 
              </select>
              @error('egitim_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="kullanici_id">kullanici_id</label>
                {{-- <input class="form-control" type="text" name="kullanici_id" value="{{$yorum->kullanici_id}}" /> --}}
                <select class="form-select form-control" name="kullanici_id" aria-label="Default select example">                
                  @foreach ($users as $item)                      
                    <option value="{{$item->id}}" {{ ($yorum->kullanici_id == $item->id) ? 'selected' : ''}}>{{$item->name}}</option>
                  @endforeach 
                </select>
                @error('kullanici_id')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="baslik">baslik</label>
              <input class="form-control" type="text" name="baslik" value="{{$yorum->baslik}}" />
              @error('baslik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">icerik</label>
              <input class="form-control" type="text" name="icerik" value="{{$yorum->icerik}}" />
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
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