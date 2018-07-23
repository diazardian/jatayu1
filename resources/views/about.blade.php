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
                                <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="margin-b-20">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                                <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
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

    <!-- Team -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Meet the Team</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Team -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="bg-color-white margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/770x860/01.jpg" alt="Team Image">
                        </div>
                    </div>
                    <h4><a href="#">Alicia Keys</a> <span class="text-uppercase margin-l-20">Project Manager</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <!-- End Team -->

                <!-- Team -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="bg-color-white margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/770x860/02.jpg" alt="Team Image">
                        </div>
                    </div>
                    <h4><a href="#">James Millner</a> <span class="text-uppercase margin-l-20">Lead Developer</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <!-- End Team -->

                <!-- Team -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="bg-color-white margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/770x860/03.jpg" alt="Team Image">
                        </div>
                    </div>
                    <h4><a href="#">Scarlet Johanson</a> <span class="text-uppercase margin-l-20">Designer</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <!-- End Team -->
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Team -->
    <!--========== END PAGE LAYOUT ==========-->

@endsection