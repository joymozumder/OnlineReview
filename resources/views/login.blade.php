<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="{{asset('frontend/https://fonts.googleapis.com/css?family=Play:400,700')}}" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
@if(Session::has('msg'))
    <div class="alert alert-success">{{Session::get('msg')}}</div>
@endif
<form enctype="multipart/form-data" class="login100-form validate-form" method="post" action="{{ URL::to('postlogin' )}}">
             {{csrf_field()}}
              
        <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3>Login</h3>
                <p>Welcome to Review System</p>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm">
                            <div class="row">
                                
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email"placeholder="Enter Email">
                                   <span style="color: red;">{{ $errors->first('email') }}</span>
                                </div>
                               
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control"placeholder="Enter Password">
                                <span style="color: red;">{{ $errors->first('password') }}</span>
                                </div>
                               
                               
                               
                                <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks" checked> Stay logged in
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Login</button>
                                <button class="btn btn-default">Join us</button>
                                
                                    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
               
            </div>
        </div>   
    </div>
    </form>
	
    <!-- jquery
		============================================ -->
    <script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('frontend/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('frontend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('frontend/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('frontend/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('frontend/js/tab.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('frontend/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('frontend/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{asset('frontend/js/tawk-chat.js')}}"></script>
</body>

</html>