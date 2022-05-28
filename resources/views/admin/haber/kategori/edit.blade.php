@extends('admin.layout', ['navbars' => $navbars, 'title' => "Kategori", 'title2' => 'update', 'title_link' => '/admin/haber/haber_kategoris', 'header' => "Kategori güncelle"])
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
        <form method="POST" action="/admin/haber/haber_kategoris/{{$kategori->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Ad:</label>
              <input class="form-control" type="text" name="ad" value="{{$kategori->ad}}" />
              @error('ad')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama:</label>
              <input class="form-control" type="text" name="aciklama" value="{{$kategori->aciklama}}" />
              <textarea id="summernote" name="aciklama">
                {{$kategori->aciklama}}
              </textarea>
              @error('aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
              <input class="form-control" type="file" name="resim"/>
              <br>
              <img src="{{$kategori->resim ? asset('storage/'.$kategori->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              @error('resim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">Resim açıklama:</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{$kategori->resim_aciklama}}" />
              @error('resim_aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icon">Icon:</label>
              <input class="form-control" type="text" name="icon" value="{{$kategori->icon}}" />
              @error('icon')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
            
            <div class="mb-3">
              <label class="form-label" for="navbar_gorunme">Navbar görünme durumu:</label>
              {{-- <input class="form-control" type="text" name="navbar_gorunme" value="{{$kategori->navbar_gorunme}}" /> --}}
              <select class="form-select form-control" name="navbar_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($kategori->navbar_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($kategori->navbar_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
              </select>
              @error('navbar_gorunme')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="footer_gorunme">Footer görünme durumu:</label>
              {{-- <input class="form-control" type="text" name="footer_gorunme" value="{{$kategori->footer_gorunme}}" /> --}}
              <select class="form-select form-control" name="footer_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($kategori->footer_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($kategori->footer_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
              </select>
              @error('footer_gorunme')
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