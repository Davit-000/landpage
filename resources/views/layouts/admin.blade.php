<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>{{ $title }}</title>

    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}" type="text/css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" type="text/css">
    <script src="{{ URL::asset('js/vendor/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-filestyle.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.lwtCountdown-1.0.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/ckeditor/ckeditor.js') }}"></script>
</head>
<body>
    <header id="header-wrapper">
        @yield('header')
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </header>

    @yield('content')


</body>
</html>