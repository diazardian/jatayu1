@extends('layouts.parent2')

@section('title', 'Jatayu')

@section('about')


    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">About Us</h1>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!--========== PAGE LAYOUT ==========-->

    <!-- About -->
    <div class="content-lg container">
        <div class="row margin-b-20">
            <div class="col-sm-6">
                <h2>About</h2>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <div class="col-sm-7 sm-margin-b-50">
                <div class="margin-b-30">
                    <div class="margin-b-30">
                        <h4 style="color: #49a5d9;">Founded in 2005</h4>
                    </div>
                    <p style="font-size: 15pt">Jatayu is a company that commited giving solutions to your company through IT services, that increasing productivity</p>
                </div>
                <div class="margin-b-30">
                    <h2>Brief History</h2>
                </div>
                <div class="margin-b-30">
                    <div class="margin-b-30">
                        <h4 style="color: #49a5d9;">As a one support service</h4>
                    </div>
                    <p style="font-size: 15pt">Jatayu adalah perusahaan yang berkomitmen untuk memberikan solusi dalam menunjang perusahaan anda</p>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <img class="img-responsive" src="{{asset('img/logoblacklg.png')}}" alt="Our Office">
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End About -->


    <!-- Testimonials -->
    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Notes From CEO</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.
                                </div>
                                <div class="margin-b-20">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.
                                </div>
                                <p><span class="fweight-700 color-link">Joh Milner</span></p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->

                    <!-- Pagination -->
                    <div class="swiper-testimonials-pagination"></div>
                </div>
                <!-- End Swiper Testimonials -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Testimonials -->
    <!--========== END PAGE LAYOUT ==========-->

@endsection