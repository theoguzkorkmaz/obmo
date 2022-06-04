@extends('admin.layout', ['navbars' => $navbars, 'title' => "Haber", 'title2' => 'update', 'title_link' => '/admin/haber/habers', 'header' => "Haber güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/haber/habers" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Haber güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/haber/habers/{{$haber->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">            

            <div class="mb-3">
              <label class="form-label" for="ad">Kategori:</label>
              {{-- <input class="form-control" type="text" name="kategori_id" value="{{$haber->kategori_id}}" /> --}}
              <select class="form-select form-control" name="kategori_id" aria-label="Default select example">                
                @foreach ($kategoris as $item)                      
                  <option value="{{$item->id}}" {{ ($haber->kategori_id == $item->id) ? 'selected' : ''}}>{{$item->ad}}</option>
                @endforeach 
              </select>
              @error('kategori_id')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3"> 
              <label class="form-label" for="baslik">Başlık:</label>
              <input class="form-control" type="text" name="baslik" value="{{$haber->baslik}}" />
              @error('baslik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{$haber->icerik}}" /> --}}
              <textarea id="summernote" name="icerik">
                {!! $haber->icerik !!}
              </textarea>
              @error('icerik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
              <input class="form-control" type="file" name="resim"/>
              <br>
              <img src="{{$haber->resim ? asset('storage/'.$haber->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              @error('resim')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">Resim açıklama:</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{$haber->resim_aciklama}}" />
              @error('resim_aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="etiket">Etiket:</label>
              <input class="form-control" type="text" name="etiket" value="{{$haber->etiket}}" />
              @error('etiket')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="admin">Ekleyen admin:</label>
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