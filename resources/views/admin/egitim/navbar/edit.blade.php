@extends('admin.layout', ['navbars' => $navbars, 'title' => "Navbar", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_navbars', 'header' => "Navbar güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/egitim/egitim_navbars" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Navbar güncelle</h1>
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
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="icon">Icon:</label>
                <input class="form-control" type="text" name="icon" value="{{$navbar->icon}}" />
                @error('icon')
                  <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="link">Link:</label>
              <input class="form-control" type="text" name="link" value="{{$navbar->link}}" />
              @error('link')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>     
              @enderror 
          </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              <input class="form-control" type="text" name="icerik" value="{{$navbar->icerik}}" />
              @error('icerik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
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
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
           
            <div class="mb-3">
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