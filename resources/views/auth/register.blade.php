@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kayıt ol') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Adınız ve soyadınız:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Cinsiyetiniz:') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus> --}}
                                <div class="form-control mb-2">
                                    <input type="radio" name="gender" id="radio1" value="Erkek"  required>
                                    <label for="radio1">Erkek</label>
                                </div>
                                <div class="form-control">
                                    <input type="radio" name="gender" id="radio2" value="Kadın" required>
                                    <label for="radio2">Kadın</label>
                                </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('Şehriniz:') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus> --}}
                                <select name="city" class="form-control" required>
                                    <option value="0" selected>Şehrinizi seçin:</option>
                                    <option value="1">Adana</option>
                                    <option value="2">Adıyaman</option>
                                    <option value="3">Afyonkarahisar</option>
                                    <option value="4">Ağrı</option>
                                    <option value="5">Amasya</option>
                                    <option value="6">Ankara</option>
                                    <option value="7">Antalya</option>
                                    <option value="8">Artvin</option>
                                    <option value="9">Aydın</option>
                                    <option value="10">Balıkesir</option>
                                    <option value="11">Bilecik</option>
                                    <option value="12">Bingöl</option>
                                    <option value="13">Bitlis</option>
                                    <option value="14">Bolu</option>
                                    <option value="15">Burdur</option>
                                    <option value="16">Bursa</option>
                                    <option value="17">Çanakkale</option>
                                    <option value="18">Çankırı</option>
                                    <option value="19">Çorum</option>
                                    <option value="20">Denizli</option>
                                    <option value="21">Diyarbakır</option>
                                    <option value="22">Edirne</option>
                                    <option value="23">Elazığ</option>
                                    <option value="24">Erzincan</option>
                                    <option value="25">Erzurum</option>
                                    <option value="26">Eskişehir</option>
                                    <option value="27">Gaziantep</option>
                                    <option value="28">Giresun</option>
                                    <option value="29">Gümüşhane</option>
                                    <option value="30">Hakkâri</option>
                                    <option value="31">Hatay</option>
                                    <option value="32">Isparta</option>
                                    <option value="33">Mersin</option>
                                    <option value="34">İstanbul</option>
                                    <option value="35">İzmir</option>
                                    <option value="36">Kars</option>
                                    <option value="37">Kastamonu</option>
                                    <option value="38">Kayseri</option>
                                    <option value="39">Kırklareli</option>
                                    <option value="40">Kırşehir</option>
                                    <option value="41">Kocaeli</option>
                                    <option value="42">Konya</option>
                                    <option value="43">Kütahya</option>
                                    <option value="44">Malatya</option>
                                    <option value="45">Manisa</option>
                                    <option value="46">Kahramanmaraş</option>
                                    <option value="47">Mardin</option>
                                    <option value="48">Muğla</option>
                                    <option value="49">Muş</option>
                                    <option value="50">Nevşehir</option>
                                    <option value="51">Niğde</option>
                                    <option value="52">Ordu</option>
                                    <option value="53">Rize</option>
                                    <option value="54">Sakarya</option>
                                    <option value="55">Samsun</option>
                                    <option value="56">Siirt</option>
                                    <option value="57">Sinop</option>
                                    <option value="58">Sivas</option>
                                    <option value="59">Tekirdağ</option>
                                    <option value="60">Tokat</option>
                                    <option value="61">Trabzon</option>
                                    <option value="62">Tunceli</option>
                                    <option value="63">Şanlıurfa</option>
                                    <option value="64">Uşak</option>
                                    <option value="65">Van</option>
                                    <option value="66">Yozgat</option>
                                    <option value="67">Zonguldak</option>
                                    <option value="68">Aksaray</option>
                                    <option value="69">Bayburt</option>
                                    <option value="70">Karaman</option>
                                    <option value="71">Kırıkkale</option>
                                    <option value="72">Batman</option>
                                    <option value="73">Şırnak</option>
                                    <option value="74">Bartın</option>
                                    <option value="75">Ardahan</option>
                                    <option value="76">Iğdır</option>
                                    <option value="77">Yalova</option>
                                    <option value="78">Karabük</option>
                                    <option value="79">Kilis</option>
                                    <option value="80">Osmaniye</option>
                                    <option value="81">Düzce</option>
                                </select>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail adresiniz:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Şifreniz:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Şifre tekrarı:') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">                                                                                                                                                                        
                                <button type="submit" class="btn btn-ozel w-100">
                                    {{ __('Kayıt ol') }}
                                </button>                                
                                <p class="my-2">
                                    Zaten hesabınız mı var? Hemen
                                    <a href="/login">                                    
                                        {{ __('Giriş yap') }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
