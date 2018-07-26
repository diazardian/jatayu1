@extends('layouts.parent2')

@section('title', 'Jatayu' )

@section('serv3')

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Manage<br>Service</h1>
        </div>
    </div>
    <!--========== PARALLAX ==========-->
    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                <div class="col-sm-12 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-globe" style="text-align: center"></i>
                            </div>
                            <div class="service-info">
                                <h3 style="text-align: center">Manage <br> Service</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
        <!-- End Service -->

    <!-- manage serv -->
    <div class="content-lg container">
        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-6 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2 style="font-size: 70px">Manage <br> Service</h2>
                        <p style="font-size: 20pt">We provide set of IT services for your daily IT basis. Fast installation with routine maintaining check, like workstation installation, and etc.
                            Fairly price with great service and helpful team, it can’t be go wrong choosing us</p>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 sm-margin-b-50">
                    <div class="margin-b-30">
                        <img src="{{asset('img/640x380/01.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- manage serv-->

    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
        </div>
    </div>

@endsection