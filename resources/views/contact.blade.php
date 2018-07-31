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
                            <li><i class="margin-r-10 color-base icon-envelope"></i> info@jatayu.id</li>
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

    <div class=" content-md container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4"> <iframe width="600" height="450" frameborder="0" style="border:0"
                                           src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJHa7GOdz71y0R4_LFU0h8ZP4&key=AIzaSyDurjpNTU8n1eGaY73QA-SEjIAPOtiaGsQ" allowfullscreen></iframe></div>

        </div>

    </div>
    <!--========== END PAGE LAYOUT ==========-->

    @endsection