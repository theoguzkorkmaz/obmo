@extends('admin.layout', ['navbars' => $navbars, 'title' => "Topbar", 'title2' => 'update', 'title_link' => '/admin/haber/haber_topbars', 'header' => "Topbar güncelle"])
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
        <form method="POST" action="/admin/haber/haber_topbars/{{$topbar->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Ad:</label>
              <input class="form-control" type="text" name="ad" value="{{$topbar->ad}}" />
              @error('ad')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="link">Link:</label>
              <input class="form-control" type="text" name="link" value="{{$topbar->link}}" />
              @error('link')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama:</label>
              {{-- <input class="form-control" type="text" name="aciklama" value="{{$topbar->aciklama}}" /> --}}
              <textarea id="summernote" name="aciklama">
                {{$topbar->aciklama}}
              </textarea>
              @error('aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="yer">Yer:</label>
              {{-- <input class="form-control" type="text" name="yer" value="{{$topbar->yer}}" /> --}}
              <select class="form-select form-control" name="yer" aria-label="Default select example">                                
                <option value="0" {{ ($topbar->yer == 0) ? 'selected' : ''}}>Sol taraf</option>
                <option value="1" {{ ($topbar->yer == 1) ? 'selected' : ''}}>Sağ taraf</option>                
              </select>
              @error('yer')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>  
          
            <div class="mb-3">
              <label class="form-label" for="icon">Icon:</label>
              <input class="form-control" type="text" name="icon" value="{{$topbar->icon}}" />
              @error('icon')
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