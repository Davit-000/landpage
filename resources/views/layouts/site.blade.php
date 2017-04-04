<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <!-- Lato -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}" type="text/css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" type="text/css">
</head>

<body id="body">

<div id="preloader">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div>

<!--
Header start
==================== -->
    @yield('header')

<!--
Content start
==================== -->
    @yield('content')

<!-- Js -->
<script src="{{ URL::asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ URL::asset('js/vendor/jquery-1.10.2.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{ URL::asset('js/jquery.lwtCountdown-1.0.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.form.js') }}"></script>
<script src="{{ URL::asset('js/jquery.nav.js') }}"></script>
<script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
<script src="{{ URL::asset('js/plugins.js') }}"></script>
<script src="{{ URL::asset('js/wow.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>
