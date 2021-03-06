@extends('layouts.parent')

@section('title', 'Jatayu')

@section('home')
    <!--========== SLIDER ==========-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @php $c = 0 @endphp
                @foreach(\App\Carousel::all() as $carousel)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $c }}" class="@if($c++ == 0 ) active @endif"></li>
                @endforeach
            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @php $c = 0 @endphp
            @foreach(\App\Carousel::all() as $carousel)
                <div class="item @if($c++ == 0 ) active @endif">
                    <img class="img-responsive" src="{{ asset('images/carousel/'.$carousel->dir) }}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title"></h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Culture -->
    <div class="content-xxs">
        <div class="text-center wow fadeInLeft" data-wow-duration=".4" data-wow-delay=".4">
            <h1>Our Culture</h1>
        </div>
    </div>
    <div class="section-seperator">
        <div class="content-vlg container">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>Smart</h3>
                        <p>We must think twice do once, work smart efficiently</p>
                    </div>
                </div>
                <div class="col-sm-3 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>Humble</h3>
                        <p>Cheerful and humble with the others. Caring and take care</p>
                    </div>
                </div>
                <div class="col-sm-3 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>Speed</h3>
                        <p>Fast response in any situational circumstances, service above all</p>
                    </div>
                </div>
                <div class="col-sm-3 sm-margin-b-50">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <h3>Passion</h3>
                        <p>We all have passions in our work, passion made perfect</p>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Culture -->

    <!--========== PARALLAX 4 Pillar ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/02.jpg">
        <div class="parallax-content container">
            <div class="row row-space-1 margin-b-2">
                <div class="content-par text-center wow fadeInLeft" data-wow-duration=".4" data-wow-delay=".4">
                    <h1 style="color: #ffffff;">Our Service</h1>
                </div>
                <div class="col-sm-3">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-chemistry"></i>
                            </div>
                            <div class="service-info">
                                <h3>Networking Infrastructure</h3>
                            </div>
                            <a href="{{ route('serv1') }}" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-screen-tablet"></i>
                            </div>
                            <div class="service-info">
                                <h3>Internet <br> Solution</h3>
                            </div>
                            <a href="{{ route('serv2')}}" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-speedometer"></i>
                            </div>
                            <div class="service-info">
                                <h3>Manage <br> Service</h3>
                            </div>
                            <a href="{{ route('serv3') }}" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-puzzle"></i>
                            </div>
                            <div class="service-info">
                                <h3>Brand & Tech Development</h3>
                            </div>
                            <a href="{{ route('serv4') }}" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--========== PARALLAX 4 Pillar ==========-->

    <!-- Service -->
    <!-- 1 -->
    <div class="content-lg container">
        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2>Networking Infrastructure</h2>
                        <p style="font-size: 16pt">One of our specialities, is a network infrastructure solution. We help you to find solution and also providing networking infrastructure based on your needs and capabilities</p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('img/640x380/networkinfra.png') }}" alt="Our Office">
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- 1 -->
    <!-- 2 -->
    <div class="content-lg container">
        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-0">
                    <img class="img-responsive" src="{{ asset('img/640x380/intsol.png') }}" alt="Our Office">
                </div>
                <div class="col-sm-1"></div>
                <div class=" col-sm-7 text-right">
                    <div class="margin-b-30">
                        <h2>Internet Solution</h2>
                        <p style="font-size: 16pt">Experienced for years in internet and networking, we are very capable to provide you a dedicated internet connection with high up-time and high availability service officer.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- 2 -->
    <!-- 3 -->
    <div class="content-lg container">
        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2>Manage Service</h2>
                        <p style="font-size: 16pt">Experienced for years in internet and networking, we are very capable to provide you a dedicated internet connection with high up-time and high availability service officer.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('img/640x380/manser.png') }}" alt="Our Office">
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- 3 -->
    <!-- 4 -->
    <div class="content-lg container">
        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-0">
                    <img class="img-responsive" src="{{ asset('img/640x380/bnd.png') }}" alt="Our Office">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-7 sm-margin-b-50 text-right">
                    <div class="margin-b-30">
                        <h2>Brand & Tech Development</h2>
                        <p style="font-size: 16pt">We provide set of IT services for your daily IT basis. Fast installation with routine maintaining check, like workstation installation, and etc. Fairly price with great service and helpful team, it can’t be go wrong choosing us.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- 4 -->
    <!-- End Service -->

    {{--<!-- Latest Products -->--}}
    {{--<div class="content-lg container">--}}
        {{--<div class="row margin-b-40">--}}
            {{--<div class="col-sm-6">--}}
                {{--<h2>Latest Products</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!--// end row -->--}}

        {{--<div class="row">--}}
            {{--<!-- Latest Products -->--}}
            {{--<div class="col-sm-4 sm-margin-b-50">--}}
                {{--<div class="margin-b-20">--}}
                    {{--<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">--}}
                        {{--<img class="img-responsive" src="{{asset('img/970x647/01.jpg')}}" alt="Latest Products Image">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<h4><a href="#">Triangle Roof</a> <span class="text-uppercase margin-l-20">Management</span></h4>--}}
                {{--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>--}}
                {{--<a class="link" href="#">Read More</a>--}}
            {{--</div>--}}
            {{--<!-- End Latest Products -->--}}

            {{--<!-- Latest Products -->--}}
            {{--<div class="col-sm-4 sm-margin-b-50">--}}
                {{--<div class="margin-b-20">--}}
                    {{--<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">--}}
                        {{--<img class="img-responsive" src="{{asset('img/970x647/02.jpg')}}" alt="Latest Products Image">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<h4><a href="#">Curved Corners</a> <span class="text-uppercase margin-l-20">Developmeny</span></h4>--}}
                {{--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>--}}
                {{--<a class="link" href="#">Read More</a>--}}
            {{--</div>--}}
            {{--<!-- End Latest Products -->--}}

            {{--<!-- Latest Products -->--}}
            {{--<div class="col-sm-4 sm-margin-b-50">--}}
                {{--<div class="margin-b-20">--}}
                    {{--<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">--}}
                        {{--<img class="img-responsive" src="{{asset('img/970x647/03.jpg')}}" alt="Latest Products Image">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<h4><a href="#">Bird On Green</a> <span class="text-uppercase margin-l-20">Design</span></h4>--}}
                {{--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>--}}
                {{--<a class="link" href="#">Read More</a>--}}
            {{--</div>--}}
            {{--<!-- End Latest Products -->--}}
        {{--</div>--}}
        {{--<!--// end row -->--}}
    {{--</div>--}}
    {{--<!-- End Latest Products -->--}}

    <!-- Testimonials -->

    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Customer Reviews</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    Kita menggunakan jasa dari Jatayu, 3 kantor, internet stabil dan cepat. Pelayanan Memuaskan!!
                                </div>
                                <p><span class="fweight-700 color-link">Varyatama</span>, Jatayu Customer</p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                     Kami menggunakan layanan dari Jatayu lebih dari 5 tahun, selalu memberikan solusi yang bagus. Pelayanan masih oke!
                                </div>
                                <p><span class="fweight-700 color-link">Universitas 17 Agustus</span>, Jatayu Customer</p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                     Dari segi maintenance dan infrastruktur, luar biasa!
                                </div>
                                <p><span class="fweight-700 color-link">Galaxy Indah Jaya</span>, Jatayu Customer</p>
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

    <!-- Clients -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Our Client</h2>
                </div>
            </div>
            <!-- Swiper Clients -->
            <div class="swiper-slider">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client1.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client2.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client3.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client4.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client5.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client6.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client7.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client8.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{asset('img/clients/client9.png')}}" alt="Clients Logo">
                    </div>
                </div>
                <!-- End Swiper Wrapper -->
            </div>
            <!-- End Swiper Clients -->
        </div>
    </div>
    <!-- End Clients -->
    <!--========== END PAGE LAYOUT ==========-->

    @endsection