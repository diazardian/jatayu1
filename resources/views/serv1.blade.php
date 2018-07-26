@extends('layouts.parent2')

@section('title', 'Jatayu' )

@section('serv1')

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Networking<br>Infrastructure</h1>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                <div class="col-sm-6 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-globe" style="text-align: center"></i>
                            </div>
                            <div class="service-info">
                                <h3 style="text-align: center">Networking <br> Hardware</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-screen-tablet" style="text-align: center"></i>
                            </div>
                            <div class="service-info">
                                <h3 style="text-align: center">System <br> Integration</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Service -->

    <!-- Hardware -->
    <div class="content-lg container">
        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-6 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2 style="font-size: 80px">Networking <br> Hardware</h2>
                        <p style="font-size: 20pt">We provide networking hardware <br>
                            for network infrastructure support</p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>Where we start</p>
                        <h2 style="font-size: 40px">What We <br> Provide</h2>
                        <li class="margin-l-25" style="font-size: 25px">Router</li>
                        <li class="margin-l-25" style="font-size: 25px">Access Point</li>
                        <li class="margin-l-25" style="font-size: 25px">Antenna Feed</li>
                        <li class="margin-l-25" style="font-size: 25px">Modem</li>
                        <li class="margin-l-25" style="font-size: 25px">Switch, etc</li>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- end hardware -->

    <!-- system integration -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/04.jpg">
        <div class="parallax-content container">
            <div class="row row-space-1 margin-b-2">
                <div class="content-par wow fadeInLeft" data-wow-duration=".4" data-wow-delay=".4">
                    <h1 style="color: #ffffff;font-size: 80px;">System<br>Integration</h1>
                </div>
                <div class="content-par wow fadeInLeft" data-wow-duration=".4" data-wow-delay=".4">
                <p style="color:#ffffff;font-size: 30px;"> We serve integration system for your company </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Sys-->

    <!-- Hardware -->
    <div class="content-lg container">
        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-6 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2 style="font-size: 80px">System <br> Integration</h2>
                        <p style="font-size: 20pt">Experienced for years in internet and
                            networking, we are very capable to provide
                            you a dedicated internet connection with high
                            up-time and high availability service officer</p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>Where we start</p>
                        <h2 style="font-size: 40px">What We <br> Provide</h2>
                        <li class="margin-l-25" style="font-size: 25px">Cablin system</li>
                        <li class="margin-l-25" style="font-size: 25px">Surveilance</li>
                        <li class="margin-l-25" style="font-size: 25px">Migration system</li>
                        <li class="margin-l-25" style="font-size: 25px">VOIP & IP PBX</li>
                        <li class="margin-l-25" style="font-size: 25px">Maintenance</li>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- end hardware -->

    @endsection