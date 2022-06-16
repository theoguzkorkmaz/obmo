<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>O B M O | {{ $header }}</title>
  <!-- Font Awesome Icons -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==' crossorigin='anonymous'/>
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin_main.css') }}">
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <x-admin_sidebar_navbar :navbars="$navbars"></x-admin_sidebar_navbar>      

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0">{!! $header !!}</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ $title_link }}" class="text-danger">{!! $title !!}</a></li>
              <li class="breadcrumb-item text-white">{!! $title2 !!}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content px-3">
      @if (\Session::has('success'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3500)" x-show="show" class="alert alert-success w-50" role="alert">
          {!! \Session::get('success') !!}    
          <button @click="show = !show" class="btn p-0 float-right text-white">
            <i class="fas fa-times    "></i>  
          </button>      
        </div>
      @endif
      @yield('content')
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <div class="d-flex flex-row align-items-center justify-content-center">
        <p class="text-white mb-0">{{ date('d-m-Y H:i:s') }}</p>        
      </div>      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="/" class="text-danger font-weight-bold">O B M O</a>.</strong> Tüm hakları saklıdır.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="{{ asset('js/summernote/summernote-bs4.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#summernote').summernote(
      {height: 150,}
    );
    $('#summernote2').summernote(
      {height: 150,}
    );
    $('#summernote3').summernote(
      {height: 150,}
    );
    $('#summernote4').summernote(
      {height: 150,}
    );
    $('#summernote5').summernote(
      {height: 150,}
    );
    $('#summernote6').summernote(
      {height: 150,}
    );
  });
</script>
</body>
</html>
