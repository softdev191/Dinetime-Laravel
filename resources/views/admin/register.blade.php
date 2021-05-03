<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="" rel="apple-touch-icon">
  <title>DineTime</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('plugins/bower_components/validator/bootstrapValidator.min.css') }}" type="text/css" />
  <!-- animation CSS -->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/pages/login.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- color CSS -->
  <link href="{{asset('assets/css/colors/default-dark.css')}}" id="theme"  rel="stylesheet">
  <style>
  .login-box{
    margin: 9% auto 0 !important;    
  }
  </style>
</head>
<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <section id="wrapper" class="login-register">
    <div class="login-box">
      <div class="white-box ">
        @if(Session::has('sessionExpired'))
        <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>{!! session('sessionExpired') !!}</strong>
        </div>
        @endif
        @if(Session::has('successMessage'))
        <div class="alert alert-success alert-bold-border fade in alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>{!! session('successMessage') !!}</strong>
        </div>
        @endif
        @if(Session::has('invalid'))
        <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>{{  session('invalid') }}</strong>
        </div>
        @endif
        <form class="form-horizontal form-material" id="registerform" method="post" action="{{ route('register.submit') }}">
        {{ csrf_field() }}
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" name="firstName" placeholder="First Name">
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" name="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" id="mobileNo" name="mobileNo" placeholder="(xxx) xxx-xxxx">
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="password" required="" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control" type="password" required="" name="confirmPassword" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    <p>Already have an account? <a href="{{route('login')}}" class="text-primary m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>
        </form>
      </div>
    </div>
  </section>
  <!-- jQuery -->
  <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('plugins/bower_components/validator/bootstrapValidator.min.js') }}"></script>
  <script src="{{asset('assets/bootstrap/dist/js/tether.min.js')}}"></script>
  <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
  <!-- Menu Plugin JavaScript -->
  <script src="{{asset('plugins/bower_components/validator/example.js') }}"></script>
  <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

  <!--slimscroll JavaScript -->
  <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
  <script src="{{ asset('scripts/jquery.maskedinput.min.js') }}"></script>
  <!--Wave Effects -->
  <script src="{{asset('assets/js/waves.js')}}"></script>
  <!-- Custom Theme JavaScript -->
  <script src="{{asset('assets/js/custom.min.js')}}"></script>
  <!--Style Switcher -->
  <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>
</html>
<script type="text/javascript">
  $("#mobileNo").mask("(999) 999 - 9999");
</script>

