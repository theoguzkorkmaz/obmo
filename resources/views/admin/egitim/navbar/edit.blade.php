@extends('admin.layout', ['navbars' => $navbars, 'title' => "Navbar", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_navbars', 'header' => "Navbar güncelle"])
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
        <form method="POST" action="/admin/egitim/egitim_navbars/{{$navbar->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Ad:</label>
              <input class="form-control" type="text" name="ad" value="{{$navbar->ad}}" />
              @error('ad')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="icon">Icon:</label>
                <input class="form-control" type="text" name="icon" value="{{$navbar->icon}}" />
                @error('icon')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="link">Link:</label>
              <input class="form-control" type="text" name="link" value="{{$navbar->link}}" />
              @error('link')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>     
              @enderror 
          </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              <input class="form-control" type="text" name="icerik" value="{{$navbar->icerik}}" />
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="ismenu">Menü yeri:</label>
              {{-- <input class="form-control" type="text" name="ismenu" value="{{$navbar->ismenu}}" /> --}}
              <select class="form-select form-control" name="ismenu" aria-label="Default select example">                                
                <option value="0" {{ ($navbar->ismenu == 0) ? 'selected' : ''}}>Diğer kısım</option>
                <option value="1" {{ ($navbar->ismenu == 1) ? 'selected' : ''}}>Menü kısmı</option>                
              </select>
              @error('ismenu')
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