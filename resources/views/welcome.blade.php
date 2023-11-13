@extends('layouts.master')
@push('style')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehaa-Pay</title>

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
@endpush
@section('content')
       <!-- Coroprate banner section start -->
       <section class="coroprate-banner-section">
        <div class="overlay">
            <div class="corporate-banner-text">
                <h4 class="text-white text-center" style="text-decoration: none">Ehaa-Pay</h4>
                <h1 class="text-white text-center" >Processeur de paiement</h1>
                <p class="text-white text-center">Facilitez vos paiements en ligne avec Ehaa-Pay - La simplicité à portée de clic !</p>
                <a href="#" class="corporate-banner-btn">
                    <span class="btn-inner">
                        <span class="btn-normal-text">Ouvrir un compte</span>
                        <span class="btn-hover-text">Ouvrir un compte</span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- Coroprate banner section End -->
        
    <!-- Best Services section start -->
    <!-- <section class="best-services-section">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="best-services-left">
                            <div class="section-title corporate md-mb-0">
                                <span class="sub-title">Best Services</span>
                                <h2 class="title mb-0">We Provide</h2>
                            </div>
                            <p>We use as filler text for layouts, non-readability is of great importance but because those who do not know how to pursue pleasure</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row corporate-servicels-slider">
                            <div class="col-md-12">
                                <div class="best-services-card">
                                    <div class="best-services-img">
                                        <img src="{{ asset('assets/images/corporate/service-img1.png')}}" alt="img">
                                    </div>
                                    <div class="best-services-text">
                                        <h5 class="wt-700">Trendy Design</h5>
                                        <p>I must explain to you how all this mistaken. Tdea of main denouncing pleasure</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="best-services-card">
                                    <div class="best-services-img">
                                        <img src="{{ asset('assets/images/corporate/service-img2.png')}}" alt="img">
                                    </div>
                                    <div class="best-services-text">
                                        <h5 class="wt-700">Retina Ready</h5>
                                        <p>We use as filler text for layouts, non-readability is of great importance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="best-services-card">
                                    <div class="best-services-img">
                                        <img src="{{ asset('assets/images/corporate/service-img3.png')}}" alt="img">
                                    </div>
                                    <div class="best-services-text">
                                        <h5 class="wt-700">24/7 Live Support</h5>
                                        <p>Because those who do not know how to pursue we use as filler text for layouts</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="best-services-card">
                                    <div class="best-services-img">
                                        <img src="{{ asset('assets/images/corporate/service-img1.png')}}" alt="img">
                                    </div>
                                    <div class="best-services-text">
                                        <h5 class="wt-700">Trendy Design</h5>
                                        <p>I must explain to you how all this mistaken. Tdea of main denouncing pleasure</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="best-services-card">
                                    <div class="best-services-img">
                                        <img src="{{ asset('assets/images/corporate/service-img2.png')}}" alt="img">
                                    </div>
                                    <div class="best-services-text">
                                        <h5 class="wt-700">Retina Ready</h5>
                                        <p>We use as filler text for layouts, non-readability is of great importance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="best-services-card">
                                    <div class="best-services-img">
                                        <img src="{{ asset('assets/images/corporate/service-img3.png')}}" alt="img">
                                    </div>
                                    <div class="best-services-text">
                                        <h5 class="wt-700">24/7 Live Support</h5>
                                        <p>Because those who do not know how to pursue we use as filler text for layouts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Best Services section End -->
           
    <!-- About our company section start -->
    <section class="about-our-company-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-company-left">
                        <div class="about-company-inner">
                            <div class="about-company-img">
                                <img src="{{ asset('assets/images/corporate/about_img.png')}}" alt="img">
                            </div>
                            <a href="#" class="play-btn">
                                <img src="{{ asset('assets/images/corporate/play-icon.svg')}}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-company-right">
                        <div class="section-title corporate mb-0">
                            <span class="sub-title">Qui sommes-nous</span>
                            <h2 class="title mb-0">À propos de Ehaa-Pay</h2>
                        </div>
                        <h3>Depuis 2023</h3>
                        <p>Ehaa-Pay est une société spécialisée dans les services de paiement en ligne. Depuis notre création, nous nous sommes engagés à fournir des solutions de paiement fiables et efficaces à nos clients. Notre équipe d'experts chevronnés travaille sans relâche pour garantir que chaque transaction est sécurisée, rapide et sans tracas.</p>
                        <ul>
                            <li><img src="{{ asset('assets/images/corporate/fast.svg')}}" alt="icon"><span>Rapide</span></li>
                            <li><img src="{{ asset('assets/images/corporate/safe.svg')}}" alt="icon"><span>Sécurisé</span></li>
                            <li><img src="{{ asset('assets/images/corporate/anytime.svg')}}" alt="icon"><span>24/7</span></li>
                            <li><img src="{{ asset('assets/images/corporate/anywhere.svg')}}" alt="icon"><span>Partout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About our company section End -->
           
    <!-- how-it-work section start -->
    <section class="how-it-work-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="how-it-work-content">
                        <h2>01</h2>
                        <div class="how-it-work-text">
                            <h5>Bulk Payment</h5>
                            <p>Gagnez du temps et simplifiez votre processus de paiement avec notre service de Bulk Payment. Le service de Bulk Payment vous permet d'effectuer des paiements en masse de manière efficace et simplifiée.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="how-it-work-content">
                        <h2>02</h2>
                        <div class="how-it-work-text">
                            <h5>Paiement en ligne</h5>
                            <p>Notre service de paiement en ligne vous offre une solution pratique, sécurisée et rapide pour effectuer des transactions financières sur Internet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="how-it-work-content">
                        <h2>03</h2>
                        <div class="how-it-work-text">
                            <h5>Ehaa Billet d'avion</h5>
                            <p>Notre service d'achat de billets d'avion vous permet de réserver et d'acheter facilement des billets d'avion en ligne. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how-it-work section end -->
           
    <!-- Our Values Section Start -->
    <section class="our-values-section">
        <div class="container">
            <div class="our-values-top">
                <div class="section-title corporate text-center md-mb-0">
                    <span class="sub-title">Nos Valeurs</span>
                    <h2 class="title">Fonctionnalités impressionnantes</h2>
                </div>
                <p>Nous croyons en un ensemble de valeurs qui nous distinguent et qui sont au cœur de notre identité. Ces valeurs sont le fondement de notre entreprise et nous guident dans tous nos efforts pour offrir une expérience exceptionnelle à nos visiteurs et clients.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="our-value-text text-right">
                        <div class="our-value-icon our-value-icon1">
                            <img src="{{ asset('assets/images/corporate/color-swatch.svg')}}" alt="icon">
                        </div>
                        <h5>Excellence</h5>
                        <p>Nous nous efforçons constamment d'atteindre l'excellence dans tout ce que nous faisons.</p>
                    </div>
                    <div class="our-value-text text-right">
                        <div class="our-value-icon our-value-icon2">
                            <img src="{{ asset('assets/images/corporate/bookmark-2.svg')}}" alt="icon">
                        </div>
                        <h5>Intégrité</h5>
                        <p>L'intégrité est au cœur de notre entreprise. Nous sommes engagés à agir de manière éthique, honnête et transparente dans toutes nos interactions.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="our-values-img-section">
                        <div class="our-values-img-border"> 
                            <img src="{{ asset('assets/images/corporate/our-value-rotate-circle.png')}}" alt="loader" class="loader-img">
                            <div class="our-values-img">
                                <img src="{{ asset('assets/images/corporate/our-value-img.png')}}" alt="img">
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="our-value-text text-left">
                        <div class="our-value-icon our-value-icon3">
                            <img src="{{ asset('assets/images/corporate/document-sketch.svg')}}" alt="icon">
                        </div>
                        <h5>Innovation</h5>
                        <p>Nous croyons en l'innovation comme moteur de croissance et de progrès.</p>
                    </div>
                    <div class="our-value-text text-left">
                        <div class="our-value-icon our-value-icon4">
                            <img src="{{ asset('assets/images/corporate/code.svg')}}" alt="icon">
                        </div>
                        <h5>Engagement envers les clients</h5>
                        <p>La satisfaction de nos clients est notre priorité absolue. Nous nous engageons à comprendre leurs besoins, à leur offrir des solutions adaptées et à fournir un service exceptionnel.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Our Values Section End --> 
    
    <!-- Stay connect Section Start -->
    <section class="stay-connect-section">
        <div class="container">
            <div class="stay-connect-content">
                <div class="stay-connect-round-shape">
                    <img src="{{ asset('assets/images/app/stay-connect-round-shape.png')}}" alt="icon">
                </div>
                <img src="{{ asset('assets/images/app/stay-connect-mash-grade.png')}}" alt="img" class="stay-connect-mash-grade">
                
                <div class="section-title text-center mb-0">
                    <h2 class="title text-white mt-5" >Téléchargez notre application</h2>
                    <h5 class="dm-sans text-white">L'application Ehaa-Pay est disponible sur iOS et Android.</h5>
                </div>
                
                <div class="stay-connect-btns">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="https://play.google.com" target="_blank">
                                <img src="{{ asset('assets/images/os-store/play_store.svg')}}" alt="playstore">
                                <h5 class="dm-sans">
                                    <span>Download on</span>
                                    Google Play
                                </h5>
                            </a>
                            <div class="qr-code">
                                <div class="qr-code-img">
                                    <img src="{{ asset('assets/images/app/play-store-qr-code.png')}}" alt="qu-code">
                                </div>
                                <p class="text-white">43M+ Downloads</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://www.apple.com/app-store" target="_blank">
                                <img src="{{ asset('assets/images/os-store/app_store.svg')}}" alt="playstore">
                                <h5 class="dm-sans">
                                    <span>Download on</span>
                                    App Store
                                </h5>
                            </a>
                            <div class="qr-code">
                                <div class="qr-code-img">
                                    <img src="{{ asset('assets/images/app/app-store-qr-code.png')}}" alt="qu-code">
                                </div>
                                <p class="text-white">25M+ Downloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="stay-connect-mobile-img">
        <img src="{{ asset('assets/images/app/stay-connect-mockup.png')}}" alt="img">
    </div>
    <!-- Stay connect Section End -->
           
    <!-- testiminials section start -->
    {{-- <section class="corporate-testiminials-section">
        <!-- <img src="./{{ asset('assets/images/corporate/testimonial-bg.jpg')}}" alt="img" class="corporate-testimonial-bg" /> -->
        <div class="overlay">
            <div class="container">
                <div class="row corporate-testiminials-slider">
                    <div class="col-md-12">
                        <div class="corporate-testiminials-content">
                            <div class="clint-img">
                                <div class="clint-img-inner">
                                    <img src="{{ asset('assets/images/corporate/clint-img1.png')}}" alt="img">
                                </div>
                            </div>
                            <p>Making this the first true  😍 generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain 👏</p>
                            <h5>Rainal Deon<span>CEO, Expresso</span></h5>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="corporate-testiminials-content">
                            <div class="clint-img">
                                <div class="clint-img-inner">
                                    <img src="{{ asset('assets/images/avater/happy-customers4.png')}}" alt="img">
                                </div>
                            </div>
                            <p>Very denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, combined with a handfulso blinded by desire encounter 🥰 🤜 🤛 </p>
                            <h5>Peter Leo,<span>CTO - Criston</span></h5>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="corporate-testiminials-content">
                            <div class="clint-img">
                                <div class="clint-img-inner">
                                    <img src="{{ asset('assets/images/avater/happy-customers3.png')}}" alt="img">
                                </div>
                            </div>
                            <p>We use as filler text for layouts, non-readability is of great importance but because those who do not know how to pleasure rationally encounter consequences that are pleasure rationally encounter ❤️ ❤️</p>
                            <h5>Aurthoe De,<span>CEO - Dorid Co</span></h5>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="corporate-testiminials-content">
                            <div class="clint-img">
                                <div class="clint-img-inner">
                                    <img src="{{ asset('assets/images/avater/happy-customers2.png')}}" alt="img">
                                </div>
                            </div>
                            <p>I must explain to you how all this mistaken. Tdea of denouncing pleasure and praising pain was born and I will give you a complete account. 😍</p>
                            <h5>Roe Smith<span>Director, Growth Marketing</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- testiminials section End -->
           
    <!-- Brand Slider Section Start -->
    <section class="brands-section corporate-brands-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brands-slider">
                        <div class="brands-slider-container">
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/1.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/2.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/3.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/4.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/5.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/6.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/1.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/2.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/3.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/4.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/5.png')}}" alt="slider-img">
                            </div>
                            <div class="slider-item">
                                <img src="{{ asset('assets/images/brands/6.png')}}" alt="slider-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brands slider section end -->
           
    <!-- consultation section start -->
    <!-- <section class="consultation-section">
        <div class="container">
            <div class="consultation-card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="consultation-left">
                            <div class="section-title corporate md-mb-0">
                                <span class="sub-title text-white">Request A free</span>
                                <h2 class="title text-white">Consultation</h2>
                            </div>
                            <div class="consultation-img">
                                <img src="{{ asset('assets/images/corporate/call-outgoing-big.svg')}}" alt="img">
                            </div>
                            <div class="consultation-text">
                                <p class="text-white wt-700 uppercase">Contact us for immediate</p>
                                <h5 class="text-white wt-700">+ 22 698 698 3694</h5>
                                <h5 class="text-white wt-700 mb-0"><a href="/cdn-cgi/l/email-protection#23504c4e464c4d4663465b424e534f460d404c4e"><span class="__cf_email__" data-cfemail="8ce5e2eae3ccfff8edefe3a2efe3e1">[email&#160;protected]</span></a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="consultation-form">
                            <form>
                              <label>Your Name *</label>
                              <input type="text" placeholder="e.g.  Roe Smith">
                              
                              <label>Phone Number</label>
                              <input type="text" placeholder="e.g.  +55 695 6965">
                              
                              <label>Subject</label>
                              <div class="consultation-dropdown">
                                  <select>
                                      <option value="1">What are you looking for ?</option>
                                      <option value="2">Web Design</option>
                                      <option value="3">Web Development</option>
                                      <option value="4">Mobile Application</option>
                                  </select>
                              </div>
                              <button class="consultation-btn">
                                  <span class="btn-inner">
                                      <span class="btn-normal-text">Get Start for Free</span>
                                      <span class="btn-hover-text">Get Start for Free</span>
                                  </span>
                              </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- consultation section End -->
     
    <!-- corporate-footer-top-section start -->
    <!-- <section class="corporate-footer-top-section">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="corporate-footer-top-banner corporate-footer-top-banner1">
                    <div class="overlay">
                        <div class="corporate-footer-top-text">
                            <h4 class="text-white">Case Studies</h4>
                            <p class="uppercase text-white wt-700"><a href="#">Explore More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="corporate-footer-top-banner corporate-footer-top-banner2">
                    <div class="overlay">
                        <div class="corporate-footer-top-text">
                            <h4 class="text-white">Meet our Experts</h4>
                            <p class="uppercase text-white wt-700"><a href="#">Explore More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="corporate-footer-top-banner corporate-footer-top-banner3">
                    <div class="overlay">
                        <div class="corporate-footer-top-text">
                            <h4 class="text-white">Contact Us</h4>
                            <p class="uppercase text-white wt-700"><a href="#">Explore More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- corporate-footer-top-section end -->
@endsection