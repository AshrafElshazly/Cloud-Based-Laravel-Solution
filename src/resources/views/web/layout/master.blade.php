<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>
        {{ 'Medic' }}
    </title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medical HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Medical HTML Template v1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/slick/slick-theme.css') }}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/fancybox/jquery.fancybox.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/fontawesome/css/all.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/animation/animate.min.css') }}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/jquery-ui/jquery-ui.css') }}">
    <!-- timePicker -->
    <link rel="stylesheet" href="{{ asset('assets/web/plugins/timePicker/timePicker.css') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/web/css/style.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="{{ asset('assets/web/images/favicon.png') }}" type="image/x-icon">
    @yield('style')
</head>

<body>
    <!--Start header top-->
    <div class="page-wrapper">
        <!--header top-->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="top-left text-center text-md-left">
                            <h6>{{ $settings->welcome_txt }}</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-right text-center text-md-right">
                            <ul class="social-links">
                                <li>
                                    <a href="{{ $settings->facebook }}" aria-label="facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings->twitter }}" aria-label="twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings->instagram }}" aria-label="instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings->pinterest }}" aria-label="pinterest">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li style="padding-left: 10px">
                                    @if (!Auth::guard('client')->check())
                                            <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                                            <a href="{{route('register')}}" class="btn btn-info">Sign Up</a>
                                    @else
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Logout</button>
                                        </form>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End header top-->

    <!--Start Header Upper-->
    <section class="header-uper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-3">
                    <div class="logo">
                        <a href="{{ url('') }}">
                            <img loading="lazy" class="img-fluid" src="{{ asset('assets/web/images/logo.png') }}"
                                alt="logo">
                        </a>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-9">
                    <div class="right-side">
                        <ul class="contact-info pl-0 mb-4 mb-md-0">
                            <li class="item text-left">
                                <div class="icon-box">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <strong>Email</strong>
                                <br>
                                <a href="">
                                    <span>{{ $settings->email }}</span>
                                </a>
                            </li>
                            <li class="item text-left">
                                <div class="icon-box">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <strong>Call Now</strong>
                                <br>
                                <span>{{ $settings->phone }}</span>
                            </li>
                        </ul>
                        <div class="link-btn text-center text-lg-right">
                            <a href="{{ url('appointment') }}" class="btn-style-one">Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Header Upper-->


    <!--Start Main Header-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarLinks">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('') }}">Home</a>
                    </li>
                    <li class="nav-item @@about">
                        <a class="nav-link" href="{{ url('about-us') }}">About</a>
                    </li>
                    <li class="nav-item @@service">
                        <a class="nav-link" href="{{ url('service') }}">Service</a>
                    </li>
                    <li class="nav-item @@gallery">
                        <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item @@appointment">
                        <a class="nav-link" href="{{ url('appointment') }}">Appointment</a>
                    </li>
                    <li class="nav-item @@booking">
                        <a class="nav-link" href="{{ url('booking') }}">Booking</a>
                    </li>
                    <li class="nav-item @@contact">
                        <a class="nav-link" href="{{ url('contact-us') }}">Contact</a>
                    </li>
                    <li class="nav-item @@contact">
                        <a class="nav-link" href="{{ url('feedback') }}">FeedBack</a>
                    </li>
                    <li class="nav-item @@contact">
                        <a class="nav-link" href="{{ url('news') }}">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Main Header-->

    @yield('content')

    <!--footer-main-->
    <footer class="footer-main">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <figure>
                                    <a href="{{ url('') }}">
                                        <img loading="lazy" class="img-fluid"
                                            src="{{ asset('assets/web/images/logo-2.png') }}" alt="medic">
                                    </a>
                                </figure>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
                            <ul class="location-link">
                                <li class="item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>
                                        {{ $settings->location }}
                                    </p>
                                </li>
                                <li class="item">
                                    <i class="far fa-envelope" aria-hidden="true"></i>
                                    <a href="">
                                        <p>
                                            {{ $settings->email }}
                                        </p>
                                    </a>
                                </li>
                                <li class="item">
                                    <i class="fas fa-phone" aria-hidden="true"></i>
                                    <p>
                                        {{ $settings->phone }}
                                    </p>
                                </li>
                            </ul>
                            <ul class="list-inline social-icons">
                                <li class="list-inline-item"><a href="{{ $settings->facebook }}"
                                        aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $settings->twitter }}"
                                        aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $settings->instagram }}"
                                        aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $settings->github }}"
                                        aria-label="github"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                        <h2>Services</h2>
                        <ul class="menu-link">
                            <li>
                                <a href="{{ url(' services ') }}">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
                            </li>
                            <li>
                                <a href="{{ url(' services ') }}">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
                            </li>
                            <li>
                                <a href="{{ url(' services ') }}">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
                            </li>
                            <li>
                                <a href="{{ url(' services ') }}">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
                            </li>
                            <li>
                                <a href="{{ url(' services ') }}">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="social-links">
                            <h2>Recent Posts</h2>
                            <ul>
                                <li class="item">
                                    <div class="media">
                                        <div class="media-left mr-3">
                                            <a href="">
                                                <img loading="lazy"
                                                    src="{{ asset('assets/web/images/post-thumb-small.jpg') }}"
                                                    alt="post-thumb">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="">A lesson adip isicing</a></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                                                dolorem.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="media">
                                        <div class="media-left mr-3">
                                            <a href="">
                                                <img loading="lazy"
                                                    src="{{ asset('assets/web/images/post-thumb-small.jpg') }}"
                                                    alt="post-thumb">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="">How to make an event</a></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
                                                dolorem.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container clearfix">
                <div class="copyright-text">
                    <p>&copy; Copyright 2021. Designed &amp; Developed by <a href="">Themefisher</a></p>
                </div>
                <ul class="footer-bottom-link">
                    <li>
                        <a href="{{ url('') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('about-us') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('contact-us') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!--End footer-main-->

    <!-- scroll-to-top -->
    <div id="back-to-top" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
        <span class="icon fa fa-angle-up"></span>
    </div>


    <!-- jquery -->
    <script src="{{ asset('assets/web/plugins/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/web/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/web/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/web/plugins/slick/slick-animation.min.js') }}"></script>
    <!-- FancyBox -->
    <script src="{{ asset('assets/web/plugins/fancybox/jquery.fancybox.min.js') }}" defer></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{ asset('assets/web/plugins/google-map/gmap.js') }}" defer></script>

    <!-- jquery-ui -->
    <script src="{{ asset('assets/web/plugins/jquery-ui/jquery-ui.js') }}" defer></script>
    <!-- timePicker -->
    <script src="{{ asset('assets/web/plugins/timePicker/timePicker.js') }}" defer></script>

    <!-- script js -->
    <script src="{{ asset('assets/web/js/script.js') }}"></script>
    @yield('script')
</body>

</html>
