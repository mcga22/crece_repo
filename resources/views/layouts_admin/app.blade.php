<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crece | Fianzas Jalisco</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
    
     <!-- Dropzone.js -->
    <link href="{{ asset('admin/vendors/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
    
        <!-- PNotify -->
    <link href="{{ asset('admin/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
    
    
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logocrece.png') }}"/>
  </head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('layouts_admin.sidebar')
        
        @include('layouts_admin.navbar')
        
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              
           @yield('content')
 
          </div>
        </div>
        <!-- /page content -->

        @include('layouts_admin.footer')
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin/build/js/custom.min.js') }}"></script>
    
     <script src="{{ asset('admin/vendors/dropzone/dist/min/dropzone.min.js') }}"></script>
  </body>
</html>
