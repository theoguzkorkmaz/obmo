@extends('admin.layout', ['navbars' => $navbars, 'title' => "Eğitim", 'title2' => 'update', 'title_link' => '/admin/egitim/egitims', 'header' => "Eğitim güncelle"])
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
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3"> 
              <label class="form-label" for="baslik">Başlık:</label>
              <input class="form-control" type="text" name="baslik" value="{{$egitim->baslik}}" />
              @error('baslik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="sss">Açıklama:</label>              
              <textarea id="summernote6" name="aciklama">
                {!! $egitim->aciklama !!}
              </textarea>
              @error('aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{$egitim->icerik}}" /> --}}
              <textarea id="summernote" name="icerik">
                {!! $egitim->icerik !!}
              </textarea>
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
              <input class="form-control" type="file" name="resim"/>
              <br>
              <img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              @error('resim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">Resim açıklama:</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{$egitim->resim_aciklama}}" />
              @error('resim_aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="etiket">Etiket:</label>
              <input class="form-control" type="text" name="etiket" value="{{$egitim->etiket}}" />
              @error('etiket')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kitle">Kitle:</label>
              {{-- <input class="form-control" type="text" name="kitle" value="{{$egitim->kitle}}" /> --}}
              <textarea id="summernote2" name="kitle">
                {!! $egitim->kitle !!}
              </textarea>
              @error('kitle')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kazanim">Kazanım:</label>
              {{-- <input class="form-control" type="text" name="kazanim" value="{{$egitim->kazanim}}" /> --}}
              <textarea id="summernote3" name="kazanim">
                {!! $egitim->kazanim !!}
              </textarea>
              @error('kazanim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
            
            <div class="mb-3">
              <label class="form-label" for="dokuman">Döküman:</label>
              {{-- <input class="form-control" type="text" name="dokuman" value="{{$egitim->dokuman}}" /> --}}
              <textarea id="summernote4" name="dokuman">
                {!! $egitim->dokuman !!}
              </textarea>
              @error('dokuman')
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