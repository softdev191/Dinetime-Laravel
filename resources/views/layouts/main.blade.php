<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>DineTime</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bower_components/validator/bootstrapValidator.min.css') }}" type="text/css" />
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugins/bower_components/notify/bootstrap-notify.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/bower_components/notify/alert-bangtidy.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/bower_components/notify/alert-blackgloss.css') }}">
    <!-- Custom CSS -->
    @yield('pageSpecificCss')
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- color CSS -->
    <link href="{{asset('assets/css/colors/default-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('assets/css/stylecustom.css')}}" id="theme" rel="stylesheet">
    <style>
        .bg-353c48 {
            background-color: #131C29 !important;
        }
        .bg-3c4452 {
            background-color: #3c4452 !important;
        }
        .bg-010101 {
            background-color: #010101 !important;
        }
        .color-fff{
            color: #fff !important;
        }
        .dropdown-menu>li>a {
            padding: 9px 20px !important;
            color: #333;
        }
        .dropdown-menu{
            background-color: #fff !important;
        }

    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="loader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        @include('layouts.topbar')
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        @include('layouts.sidebar')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper" class="bg-010101">
            @yield('content')
            <!-- /.container-fluid -->
            <footer class="bg-353c48 footer text-center">&copy; {{date('Y')}} DineTime, All rights reserved.</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <div class='notifications top-right'></div>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script> --}}
    <script src="{{asset('plugins/bower_components/validator/bootstrapValidator.min.js') }}"></script>
    <script src="{{asset('plugins/bower_components/validator/example.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/notify/bootstrap-notify.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{asset('plugins/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/morrisjs/morris.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jQuery peity -->
    <script src="{{asset('plugins/bower_components/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/peity/jquery.peity.init.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/js/validator.js')}}"></script>
    <script src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script type="text/javascript">
        // info View loader
        $(window).on('load',function() {
            $("#loader").fadeOut('slow');
        });
        // notification
        $(document).ready(function(){
            @if(Session::has('successMessage'))
            notify("{{Session::get('successMessage')}}",'blackgloss');
            @endif
        });

        function notify(text,type)
        {
            $('.top-right').notify({message: { text: text },type:type}).show();
        }
        function showLoader()
        {
            $("#loader").show();
        }
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('pageSpecificJs')
</body>
</html>