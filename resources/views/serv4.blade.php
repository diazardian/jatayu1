@extends('layouts.parent2')

@section('title', 'Jatayu' )

@section('serv4')

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Brand & Tech<br>Development</h1>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-globe" style="text-align: center"></i>
                            </div>
                            <div class="service-info">
                                <h3 style="text-align: center">Web & Apps <br> Services</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-settings" style="text-align: center"></i>
                            </div>
                            <div class="service-info">
                                <h3 style="text-align: center">Application <br> Server</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-speech" style="text-align: center"></i>
                            </div>
                            <div class="service-info">
                                <h3 style="text-align: center">Digital <br> Branding</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Service -->

    <!-- web serv paralax -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/04.jpg">
        <div class="parallax-content container">
            <div class="row row-space-1 margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".4" data-wow-delay=".4">
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="margin-b-30">
                            <h2 style="font-size: 70px;color: #ffffff">Web <br> Services</h2>
                            <p style="font-size: 20pt;color:#ffffff;">From design, development through hosting and Maintenance services</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 sm-margin-b-50 wow fadeInRight" data-wow-duration=".4" data-wow-delay=".4">
                    <div class="margin-b-30">
                        <img src="{{asset('img/640x380/01.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- paralax -->

    <!-- Web Serv -->
    <div class="content-lg container">
        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-6 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2 style="font-size: 80px">Web <br> Services</h2>
                        <p style="font-size: 20pt">From design, development through hosting and Maintenance services</p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>Where we start</p>
                        <h2 style="font-size: 40px">What We <br> Provide</h2>
                        <li class="margin-l-25" style="font-size: 25px">Domain</li>
                        <li class="margin-l-25" style="font-size: 25px">Hosting</li>
                        <li class="margin-l-25" style="font-size: 25px">Web development</li>
                        <li class="margin-l-25" style="font-size: 25px">Mail hosting</li>
                        <li class="margin-l-25" style="font-size: 25px">Cloud</li>
                        <li class="margin-l-25" style="font-size: 25px">Colocation</li>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- Web Serv -->
@endsection