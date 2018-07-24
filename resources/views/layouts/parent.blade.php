<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<!-- BODY -->
<body>

<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="{{ route('home')}}">
                        <img class="logo-img logo-img-main" src="{{asset('img/logologo.png')}}" alt="Asentus Logo">
                        <img class="logo-img logo-img-active" src="{{asset('img/logoblack.png')}}" alt="Asentus Logo">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a class="nav-item-child nav-item-hover @if(Route::currentRouteName() == 'home') active @endif" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover @if(Route::currentRouteName() == 'about') active @endif" href="{{ route('about') }}">About</a></li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-item-child nav-item-hover @if(Route::currentRouteName() == 'serv1') active @endif
                            @if(Route::currentRouteName() == 'serv2') active @endif @if(Route::currentRouteName() == 'serv3')
                                    active @endif @if(Route::currentRouteName() == 'serv4') active @endif"
                               data-toggle="dropdown">Service <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('serv1') }}">Networking Infrastructure</a></li>
                                <li><a href="{{ route('serv2') }}">Internet Solution</a></li>
                                <li><a href="{{ route('serv3') }}">Manage Service</a></li>
                                <li><a href="{{ route('serv4') }}">Brand & Tech Development</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover @if(Route::currentRouteName() == 'contact') active @endif" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
<!--========== END HEADER ==========-->

@yield('home')

<!--========== FOOTER ==========-->
<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-sm container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50 content">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">About</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Products</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Careers</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Contact</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-4 sm-margin-b-30 content">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-2 content">
                    <img class="img-responsive" src="{{asset('img/logowhite.png')}}" alt="Our Office">
                </div>
                <div class="col-sm-4 sm-margin-b-30 content-md" style="font-size: 20px">
                    <address style="color: #ffffff">
                        <strong>Jatayu Corp.</strong><br>
                        Intiland Tower 9th Floor<br>
                        Panglima Sudirman No.101-103, Surabaya<br>
                        <abbr title="Phone">P:</abbr> +6231-547-771
                    </address>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <img class="footer-logo" src="{{asset('img/logologo.png')}}" alt="Asentus Logo">
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0">&copy; 2018 Jatayu. All Rights Reserved.</p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="{{asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="{{asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/maps.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/swiper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/masonry.min.js')}}" type="text/javascript"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVfdVQqnx9wPueW_jzovNd4VusGeSCax0&callback=initMap"
        type="text/javascript"></script>
</body>
<!-- END BODY -->
</html>