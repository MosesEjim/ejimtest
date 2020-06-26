
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="{{ URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ URL::asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ URL::asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ URL::asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ URL::asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="{{ URL::asset('assets/css/skins.css')}}" rel="stylesheet"/>
   <!-- BEGIN: CSS Assets-->
   <link rel="stylesheet" href="{{URL::asset('assets/css/app.css')}}" />
   <!-- END: CSS Assets-->
  @yield('styles')
</head>
<body>

@yield('scripts')
  <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
	
 <!-- simplebar js -->
  <script src="{{ URL::asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ URL::asset('assets/js/sidebar-menu.js')}}"></script>
  <!-- loader scripts -->
  <script src="{{ URL::asset('assets/js/jquery.loading-indicator.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{ URL::asset('assets/js/app-script.js')}}"></script>
  <!-- Chart js -->
  
  <script src="{{ URL::asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>
  <!-- Vector map JavaScript -->
  <script src="{{ URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{ URL::asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Easy Pie Chart JS -->
  <script src="{{ URL::asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
  <!-- Sparkline JS -->
  <script src="{{ URL::asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-knob/excanvas.js')}}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
  
  <script src="{{ URL::asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-knob/excanvas.js')}}"></script>
  <script src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="{{ URL::asset('assets/js/index.js')}}"></script>

