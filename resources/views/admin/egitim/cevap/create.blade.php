@extends('admin.layout', ['navbars' => $navbars, 'title' => "Cevap", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_cevaps', 'header' => "Cevap oluştur"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/egitim/egitim_cevaps" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Cevap oluştur</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/egitim/egitim_cevaps" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="soru_id">Soru:</label>
              {{-- <input class="form-control" type="text" name="soru_id" value="{{old('soru_id')}}" /> --}}
              <select class="form-select form-control" name="soru_id" aria-label="Default select example">
                <option selected disabled>Sorular</option>
                @foreach ($sorus as $item)                      
                  <option value="{{$item->id}}">{{$item->soru}}</option>
                @endforeach                  
              </select>
              @error('soru_id')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="cevap_no">Cevap no:</label>
                <input class="form-control" type="text" name="cevap_no" value="{{old('cevap_no')}}" />
                @error('cevap_no')
                  <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
                @enderror 
            </div> 
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{old('icerik')}}" /> --}}
              <textarea id="summernote" name="icerik">
                {{old('icerik')}} 
              </textarea>
              @error('icerik')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="dogru">Doğru:</label>
              {{-- <input class="form-control" type="text" name="dogru" value="{{old('dogru')}}" /> --}}
              <select class="form-select form-control" name="dogru" aria-label="Default select example">                                
                <option value="0" selected>Yanlış cevaptır</option>
                <option value="1">Doğru cevaptır</option>                
              </select>
              @error('dogru')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="admin">Admin:</label>
              <input class="form-control" type="text" name="admin" value="{{auth()->user()->id}}" readonly />
              <small>Bu veri <b>{{auth()->user()->name}}</b> tarafından oluşturulacak</small>
              @error('admin')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>     
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
                Oluştur
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>

  
@endsection