<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ehaa-Pay - Connexion</title>

        <!-- favicon included here -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo/fav.png')}}" type="image/x-icon">

        <!-- apple touch icon included here -->
        <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/fav.png')}}">

        <!-- All css files included here -->
        <!-- Bootstrap  v5.2.1 css -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <!-- slick slider css -->
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css')}}">
        <!-- pie progress css -->
        <link rel="stylesheet" href="{{ asset('assets/css/asPieProgress.min.css')}}">
        <!-- VenoBox 2.0.4 css -->
        <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css')}}">
        <!-- Light Box css -->
        <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css')}}">
        <link href="{{ asset('assets/css/magnific-popup.css')}}" rel="stylesheet">

        <!-- headline.css -->
        <link rel="stylesheet" href="{{ asset('assets/css/headline.css')}}">
        <!-- font awesome -->
        <link rel="stylesheet" href="{{ asset('assets/ajax/libs/font-awesome/6.2.1/css/all.min.css')}}">
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    </head>
    <body>
        <!-- Preloader -->
        @include('layouts.preloader')
        <!-- Preloader -->
        <div class="auth-body">
            @yield('content')
        </div>
        <!-- All javascript files included here -->
        <!-- jQuery v3.6.1 js -->
        <script src="{{ asset('assets/js/jquery-3.6.1.min.js')}}"></script>
        <!-- popper v2.11.6 js -->
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap  v5.2.1 js -->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- masonry js -->
        <script src="{{ asset('assets/js/masonry.pkgd.min.js')}}"></script>
        <!-- Iconify v3.0.0 js -->
        <script src="{{ asset('assets/js/iconify.min.js')}}"></script>
        <!-- modernizr js -->
        <script src="{{ asset('assets/js/modernizr.js')}}"></script>
        <!-- slick slider js -->
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <!-- swiper slider js --->
        <script src="{{ asset('assets/js/swiper.min.js')}}"></script>
        <!-- pie progress js -->
        <script src="{{ asset('assets/js/jquery-asPieProgress.js')}}"></script>
        <!-- VenoBox 2.0.4 js -->
        <script src="{{ asset('assets/js/venobox.min.js')}}"></script>
        <!-- Splitting js -->
        <script src="{{ asset('assets/js/splitting.js')}}"></script>
        <script src="{{ asset('assets/js/splitting-out.js')}}"></script>
        <!-- jquery.rollNumber js -->
        <script src="{{ asset('assets/js/jquery.rollNumber.js')}}"></script>
        <!-- parallax js -->
        <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
        <!-- ScrollTrigger 3.11.2 js -->
        <script src="{{ asset('assets/js/ScrollTrigger.min.js')}}"></script>
        <!-- Headline.js -->
        <script src="{{ asset('assets/js/headline.js')}}"></script>
       <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

        <!-- Image Light box -->
        <script src="{{ asset('assets/js/lightbox.js')}}"></script>
        <!-- sticky sidebar js -->
        <script src="{{ asset('assets/js/sticky-sidebar.js')}}"></script>
        <!-- Image Loaded js -->
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- isotop -->
        <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- darkMood tsx -->
        <script src="{{ asset('assets/js/dark-mood-js.txt')}}"></script>
        <!-- custom js -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
</html>