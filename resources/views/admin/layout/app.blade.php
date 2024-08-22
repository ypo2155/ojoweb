<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}; url=/logout">

    <title>OJO - Admin</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
          <!-- App favicon -->
          <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}">

        <!-- Dropify css -->
        <link href="{{ asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
    
        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pag.css') }}" rel="stylesheet" type="text/css" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo/cttk-logo.png') }}">

        <!-- Dropify css -->
        <link href="{{ asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

          <!-- Plugins css -->
         <link href="{{ asset('plugins/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('plugins/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />

         {{-- CKEditor CDN --}}
         <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    

<style>
    /*Textbox*/
    .ck-editor__editable {
        min-height: 300px;
        

 
    }
    
</style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
         <!-- Begin page -->
    <div id="layout-wrapper">

<header id="page-topbar">
    <div class="navbar-header">
        <!-- LOGO -->
        <div class="navbar-brand-box d-flex align-items-left">
            <a href="{{ route('adminindex') }}" class="logo">
                <img style="width: 90px;height: auto;" src="{{ asset('assets/images/logo/logo.png') }}" alt="eeaio">
            </a>

            <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect waves-light" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>


            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn header-item waves-effect waves-light" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/logo/logo.png') }}"
                        alt="Header Avatar">
                    
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('adminprofile')}}">
                        <span>Profile</span>
                       
                    </a>
                    
                    <a  class="dropdown-item d-flex align-items-center justify-content-between"href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span>{{ __('Logout') }}</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                        @csrf
                        </form>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</header>
@include('admin.layout.slide')
<!-- Left Sidebar End -->

        <main class="py-4">
            
            @yield('admincontent')
        </main>
    </div>



    @include('admin.layout.footer')
    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>



    
    <!-- Sparkline Js-->
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Js-->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Morris Js-->
    <script src="{{ asset('plugins/morris-js/morris.min.js') }}"></script>
    <!-- Raphael Js-->
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/pages/dashboard-demo.js') }}"></script>

    
    <script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
    <!-- Init js-->
    <script src="{{ asset('assets/pages/fileuploads-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

   
    
     <!-- Plugins js -->
     <script src="{{ asset('plugins/katex/katex.min.js') }}"></script>
    <script src="{{ asset('plugins/quill/quill.min.js') }}"></script>


     <!-- Init js-->
     <script src="{{ asset('assets/pages/quilljs-demo.js') }}"></script>
    
     <script>
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
    });
</script>
</body>
</html>
