@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sayfa", 'title2' => 'update', 'title_link' => '/admin/haber/haber_sayfas', 'header' => "Sayfa güncelle"])
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
        <form method="POST" action="/admin/haber/haber_sayfas/{{$sayfa->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Başlık:</label>
              <input class="form-control" type="text" name="ad" value="{{$sayfa->ad}}" />
              @error('ad')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{$sayfa->icerik}}" /> --}}
              <textarea id="summernote" name="icerik">
                {!! $sayfa->icerik !!}
              </textarea>
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
              <img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              <br>
              <input class="form-control" type="file" name="resim"/>
              @error('resim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="navbar_gorunme">Navbarda gözükme durumu:</label>
              {{-- <input class="form-control" type="text" name="navbar_gorunme" value="{{$sayfa->navbar_gorunme}}" /> --}}
              <select class="form-select form-control" name="navbar_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($sayfa->navbar_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($sayfa->navbar_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
              </select>
              @error('navbar_gorunme')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="footer_gorunme">Footerda gözükme durumu:</label>
              {{-- <input class="form-control" type="text" name="footer_gorunme" value="{{$sayfa->footer_gorunme}}" /> --}}
              <select class="form-select form-control" name="footer_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($sayfa->footer_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($sayfa->footer_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
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