<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#061948">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#061948">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#061948">
    <title>{{ $title }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/landing/images/fav-icon/icon.png') }}">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/style.css') }}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/responsive.css') }}">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <script src="vendor/html5shiv.js"></script>
   <script src="vendor/respond.js"></script>
  <![endif]-->
</head>

<body>
    <div class="main-page-wrapper">

        <!-- ===================================================
    Loading Transition
   ==================================================== -->
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>


        @include('landing.layouts.header')
        @yield('container')


        <script src="{{ asset('assets/landing/vendor/jquery.2.2.3.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets/landing/vendor/popper.js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/landing/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Camera Slider -->
        <script src='{{ asset('assets/landing/vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}'></script>
        <script src='{{ asset('assets/landing/vendor/Camera-master/scripts/jquery.easing.1.3.js') }}'></script>
        <script src='{{ asset('assets/landing/vendor/Camera-master/scripts/camera.min.js') }}'></script>
        <!-- menu  -->
        <script src="{{ asset('assets/landing/vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
        <!-- WOW js -->
        <script src="{{ asset('assets/landing/vendor/WOW-master/dist/wow.min.js') }}"></script>
        <!-- owl.carousel -->
        <script src="{{ asset('assets/landing/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- js count to -->
        <script src="{{ asset('assets/landing/vendor/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/landing/vendor/jquery.countTo.js') }}"></script>
        <!-- Fancybox -->
        <script src="{{ asset('assets/landing/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

        <!-- Theme js -->
        <script src="{{ asset('assets/landing/js/theme.js') }}"></script>
    </div> <!-- /.main-page-wrapper -->
</body>

</html>
