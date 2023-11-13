<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @stack('style')
    <body class="corporate-body">
        <!-- Preloader -->
        @include('layouts.preloader')
       <!-- Preloader -->
       <!-- Header section start -->
       @include('layouts.header')
       <!-- Header section end -->

       <!-- Canvas Mobile Menu start -->
       @include('layouts.nav')
       <!-- Canvas Menu end -->

       @yield('content')
                       
       <!-- footer-section Start-->
       @include('layouts.footer')
       <!-- footer-section End-->
               
       <!-- scroll top section start -->
       <div class="staco-scroll-top corporate">
           <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
               <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
           </svg>
           <div class="staco-scroll-top-icon corporate">
               <span class="iconify" data-icon="mdi:arrow-up"></span>
           </div>
       </div>
       <!-- scroll top section end -->

       <!-- All javascript files included here -->
       <!-- jQuery v3.6.1 js -->
       <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{ asset('assets/js/jquery-3.6.1.min.js')}}"></script>
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