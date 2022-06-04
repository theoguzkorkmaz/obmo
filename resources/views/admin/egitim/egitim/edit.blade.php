@extends('admin.layout', ['navbars' => $navbars, 'title' => "Eğitim", 'title2' => 'update', 'title_link' => '/admin/egitim/egitims', 'header' => "Eğitim güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/egitim/egitims" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Eğitim güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/egitim/egitims/{{$egitim->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Kategori:</label>
              {{-- <input class="form-control" type="text" name="kategori_id" value="{{$egitim->kategori_id}}" /> --}}
              <select class="form-select form-control" name="kategori_id" aria-label="Default select example">                
                @foreach ($kategoris as $item)                      
                  <option value="{{$item->id}}" {{ ($egitim->kategori_id == $item->id) ? 'selected' : ''}}>{{$item->baslik}}</option>
                @endforeach 
              </select>
              @error('kategori_id')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3"> 
              <label class="form-label" for="baslik">Başlık:</label>
              <input class="form-control" type="text" name="baslik" value="{{$egitim->baslik}}" />
              @error('baslik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="sss">Açıklama:</label>              
              <textarea id="summernote6" name="aciklama">
                {!! $egitim->aciklama !!}
              </textarea>
              @error('aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{$egitim->icerik}}" /> --}}
              <textarea id="summernote" name="icerik">
                {!! $egitim->icerik !!}
              </textarea>
              @error('icerik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
              <input class="form-control" type="file" name="resim"/>
              <br>
              <img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              @error('resim')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">Resim açıklama:</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{$egitim->resim_aciklama}}" />
              @error('resim_aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="etiket">Etiket:</label>
              <input class="form-control" type="text" name="etiket" value="{{$egitim->etiket}}" />
              @error('etiket')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kitle">Kitle:</label>
              {{-- <input class="form-control" type="text" name="kitle" value="{{$egitim->kitle}}" /> --}}
              <textarea id="summernote2" name="kitle">
                {!! $egitim->kitle !!}
              </textarea>
              @error('kitle')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kazanim">Kazanım:</label>
              {{-- <input class="form-control" type="text" name="kazanim" value="{{$egitim->kazanim}}" /> --}}
              <textarea id="summernote3" name="kazanim">
                {!! $egitim->kazanim !!}
              </textarea>
              @error('kazanim')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
            
            <div class="mb-3">
              <label class="form-label" for="dokuman">Döküman:</label>
              {{-- <input class="form-control" type="text" name="dokuman" value="{{$egitim->dokuman}}" /> --}}
              <textarea id="summernote4" name="dokuman">
                {!! $egitim->dokuman !!}
              </textarea>
              @error('dokuman')
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