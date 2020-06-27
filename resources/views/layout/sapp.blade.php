<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <link href="dist/images/logo.svg" rel="shortcut icon">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>UNICEF > @yield('title')</title>
      <!-- BEGIN: CSS Assets-->
      <link href="{{ URL::asset('assets/dashboard/images/logo.png') }}" rel="shortcut icon">
      <link rel="stylesheet" href="{{URL::asset('assets/css/app.css')}}" />
      <!-- END: CSS Assets-->
      <!--favicon-->
      <!-- <link rel="icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon"> -->
      <!-- simplebar CSS-->
      <!-- <link href="{{ URL::asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/> -->
      <!-- Bootstrap core CSS-->
      <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
      <!--Data Tables -->
      <link href="{{ URL::asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ URL::asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
      <!-- animate CSS-->
      <!-- <link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/> -->
      <!-- Icons CSS-->
      <!-- <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/> -->
      <!-- Sidebar CSS-->
      <!-- <link href="{{ URL::asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/> -->
      <!-- Custom Style-->
      <link href="{{ URL::asset('assets/css/app-style.css') }}" rel="stylesheet"/>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- skins CSS-->
      <link href="{{ URL::asset('assets/css/skins.css') }}" rel="stylesheet"/>
      <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> -->
      @yield('styles')
    </head>

    <body class="app" style="background:#1C3FAA">  
      <div class="flex">
        @include('layout.sidebar')
        <div class="content">
        @include('layout.topbar')
        @yield('content')  
        </div>
        
      </div>

<!--Start topbar header-->
    
<!--End topbar header-->

<div class="clearfix"></div>
    
     
	
	<!--Start footer-->
        
	<!--End footer-->
   
 

  <script src="{{ URL::asset('assets/dashboard/js/app.js') }}"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	
  <!-- simplebar js -->
  <script src="{{ URL::asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ URL::asset('assets/js/sidebar-menu.js') }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ URL::asset('assets/js/app-script.js') }}"></script>

  <!--Data Tables js-->
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>
 
   <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>

    <script>
      @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
          case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

          case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
          case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
          case 'error':
            toastr.error("{{ Session::get('message')}}");
            break;
        }
      @endif
    </script>
@yield('scripts')
</body>
</html>
