<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="{{URL::asset('startbootstrap-grayscale-gh-pages/assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{URL::asset('https://use.fontawesome.com/releases/v5.13.0/js/all.js')}}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Varela+Round')}}" rel="stylesheet" />
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{URL::asset('startbootstrap-grayscale-gh-pages/css/styles.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('startbootstrap-grayscale-gh-pages/css/card-index.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Poppins')}}" rel="stylesheet" />
        <link href="{{URL::asset('search/css/main.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset('css/materialdesignicons.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/create-scrim.css') }}" rel="stylesheet" />
        <link href="{{URL::asset('jquery.datetimepicker.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" />
        <script src="{{URL::asset('sweetalert2/dist/sweetalert2.min.js')}}"></script>
    </head>
    <body id="page-top">
        @include('layouts.navigation')
        <!-- Masthead-->
        @yield('content')
        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <script src="{{URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Third party plugin JS-->
        <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{URL::asset('startbootstrap-grayscale-gh-pages/js/scripts.js')}}"></script>
        <script src="{{URL::asset('search/js/extention/choices.js')}}"></script>
        <script src="{{URL::asset('js/input-images.js')}}"></script>
    </body>
</html>
