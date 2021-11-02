<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Apptriangle-Technology On Demand">



    <title>Apptriangle | Technology On Demand</title>

    <!-- Mobile Specific Meta
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- CSS
    ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset("assets/plugins/apptriangle-font/style.css") }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset("assets/plugins/bootstrap/css/bootstrap.min.css") }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset("assets/plugins/lightbox2/dist/css/lightbox.min.css") }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset("assets/plugins/animate/animate.css") }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset("assets/plugins/slick/slick.css") }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

</head>

<body id="body">

<!--
 Start Preloader
 ==================================== -->
<div id="preloader">
    <div class='preloader'>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--
End Preloader
==================================== -->




<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- logo -->
            <a class="navbar-brand logo" href="{{ route('home') }}">
                <img class="logo-default" src="{{ asset('assets/images/apptriangle.png') }}" alt="logo" width="200px"/>
                <img class="logo-white" src="{{ asset('assets/images/apptriangle.png') }}" alt="logo" width="200px"/>
            </a>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation" style="background-color: white;">
                <ul class="navbar-nav ml-auto text-center">

                    <li class="nav-item  active">
                        <a class="nav-link" href="{{ route('home') }}" >
                            Home
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>



                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('team') }}">Team</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->

@yield('content')

<!--End Gallary-->
<footer id="footer" class="bg-one">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <h2 class="text-light">Apptriangle.</h2>
                    <ul class="icon-color">
                        <li><h4>BD Office</h4></li>
                        <li>
                            <i class="tf-ion-ios-home"></i>
                            <span>House # 6, Road # 8, Nikunja-2, Dhaka 1229</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>+88 01717 888388, +88 01712 152715</span>
                        </li>

                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email:info@apptriangle.com</span>
                        </li>
                    </ul>
                    <ul class="icon-color mt-3">
                        <li><h4>Australia Office</h4></li>
                        <li>
                            <i class="tf-ion-ios-home"  ></i>
                            <span>  2-10 Mount Street, North Sydney, NSW, 2060, Australia</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>ABN-78651767949</span>
                        </li>

                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email:info@apptriangle.com.au</span>
                        </li>


                    </ul>
                </div>
                <!-- End of .col-sm-3 -->



                <div class="col-sm-4 col-md-4 col-lg-4">
                    <ul>
                        <li><h3>Quick Links</h3></li>

                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('career') }}">career</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-4 col-md-4 col-lg-4">
                    <ul>
                        <li><h3>Connect with us Socially</h3></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Limkedin</a></li>
                        <li><a href="#">Youtube</a></li>

                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
        </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
        <h5>CopyrightⒸ2018- 2022 Apptriangle. All rights reserved.</h5>


    </div>
</footer> <!-- end footer -->


<!-- end Footer Area
========================================== -->



<!--
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="{{ asset("assets/plugins/jquery/jquery.min.js") }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script  src="{{ asset("assets/plugins/google-map/gmap.js") }}"></script>

<!-- Form Validation -->
<script src="{{ asset("assets/plugins/form-validation/jquery.form.js") }}"></script>
<script src="{{ asset("assets/plugins/form-validation/jquery.validate.min.js") }}"></script>

<!-- Bootstrap4 -->
<script src="{{ asset("assets/plugins/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- Parallax -->
<script src="{{ asset("assets/plugins/parallax/jquery.parallax-1.1.3.js") }}"></script>
<!-- lightbox -->
<script src="{{ asset("assets/plugins/lightbox2/dist/js/lightbox.min.js") }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset("assets/plugins/slick/slick.min.js") }}"></script>
<!-- filter -->
<script src="{{ asset("assets/plugins/filterizr/jquery.filterizr.min.js") }}"></script>
<!-- Smooth Scroll js -->
<script src="{{ asset("assets/plugins/smooth-scroll/smooth-scroll.min.js") }}"></script>

<!-- Custom js -->
<script src="{{ asset("assets/js/script.js") }}"></script>

</body>
</html>
