<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="{{asset('frontend/css/googleapis.css')}}" rel="stylesheet">
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
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/educate-custon-icon.css')}}">
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
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/list/list.css')}}">



    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
     @include('frontend.includes.sidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    


@include('frontend.includes.topbar')
        


<!--@yield('post1234')-->


        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                @yield('post12')
            </div>
        </div>
       
      
        
       @include('frontend.includes.footbar')
    </div>

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
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('frontend/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('frontend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('frontend/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('frontend/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('frontend/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('frontend/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('frontend/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('frontend/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('frontend/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('frontend/js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('frontend/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('frontend/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('frontend/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    







      <script type="text/javascript" src="{{asset('frontend/list/list.js')}}"></script>


</body>

</html>