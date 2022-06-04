@extends('admin.layout', ['navbars' => $navbars, 'title' => "Topbar", 'title2' => 'update', 'title_link' => '/admin/haber/haber_topbars', 'header' => "Topbar güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/haber/haber_topbars" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Topbar güncelle</h1>
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
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="link">Link:</label>
              <input class="form-control" type="text" name="link" value="{{$topbar->link}}" />
              @error('link')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama:</label>
              {{-- <input class="form-control" type="text" name="aciklama" value="{{$topbar->aciklama}}" /> --}}
              <textarea id="summernote" name="aciklama">
                {{$topbar->aciklama}}
              </textarea>
              @error('aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
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
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>  
          
            <div class="mb-3">
              <label class="form-label" for="icon">Icon:</label>
              <input class="form-control" type="text" name="icon" value="{{$topbar->icon}}" />
              @error('icon')
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