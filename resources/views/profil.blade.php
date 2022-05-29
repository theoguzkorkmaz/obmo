@extends('layouts.app2', ['user' => $user->name])

@section('content')
<div class="container" id="login">
  <div class="row d-flex flex-row gap-3 justify-content-center">
      <a href="/haber" class="btn btn-ozel w-25 mt-2 mb-3">
        Haber kısmına dön
      </a>   
      <a href="/egitim" class="btn btn-ozel2 w-25 mt-2 mb-3">
        Eğitim kısmına dön
      </a>   
  </div>
    <div class="row justify-content-center">      
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil</div>
                <div class="card-body">          
                    <h3 class="my-3 mb-4">
                      <strong>Toplam puanınız:</strong> {{$user->point}}  
                    </h3>        
                    <h3>Kayıtlı eğitimler:</h3>
                    <table class="table table-bordered">
                      @foreach ($egitims as $item)
                          <tr>
                            <td>
                              Eğitim:
                            </td>
                            <td><a href="/egitim/egitim_detay/{{$item->id}}">{{$item->baslik}}</a></td>
                          </tr>
                      @endforeach
                    </table>
                    <h3>Log kayıtları:</h3>
                    <table class="table table-bordered">
                      @foreach ($logs as $item)
                          <tr>
                            <td>
                              İçerik:
                            </td>
                            <td><p>{{$item->icerik}}</p></td>
                          </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection