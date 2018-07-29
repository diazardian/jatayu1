@extends('layouts.parent2')

@section('title', 'Jatayu')

@section('contact')

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Contact</h1>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Contact List -->
    <div class="section-seperator">
        <div class="content-lg container">
            <div class="row">
                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">

                </div>
                <!-- End Contact List -->

                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h2><a href="#">Surabaya</a> <span class="text-uppercase margin-l-20">Headquarter</span></h2>
                        <h3>Intiland Tower 9th Floor</h3>
                        <p>Panglima Sudirman No.101-103, Surabaya</p>
                        <ul class="list-unstyled contact-list">
                            <li><i class="margin-r-10 color-base icon-call-out"></i> +6231-547-7710</li>
                            <li><i class="margin-r-10 color-base icon-envelope"></i> mail.jatayu.id</li>
                        </ul>
                    </div>
                </div>
                <!-- End Contact List -->

                <!-- Contact List -->
                <div class="col-sm-4 sm-margin-b-50">

                </div>
                <!-- End Contact List -->
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Contact List -->

    <!-- Google Map -->
    <div id="map" class="map height-400"></div>
    <!--========== END PAGE LAYOUT ==========-->

    @endsection