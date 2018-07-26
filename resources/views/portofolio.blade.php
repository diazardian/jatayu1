@extends('layouts.parent2')

@section('title', 'Jatayu')

@section('porto')

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h1 class="carousel-title">Portofolio</h1>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!-- Work -->
    <div class="bg-color-sky-light overflow-h">
        <div class="content-lg container">
            <!-- Masonry Grid -->
            <div class="masonry-grid">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{asset('img/800x400/01.jpg')}}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Art Of Coding</h3>
                            <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{asset('img/397x400/01.jpg')}}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Clean Design</h3>
                            <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{asset('img/397x300/01.jpg')}}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Clean Design</h3>
                            <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{asset('img/397x300/02.jpg')}}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Clean Design</h3>
                            <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{{asset('img/397x300/03.jpg')}}" alt="Portfolio Image">
                        </div>
                        <div class="work-content">
                            <h3 class="color-white margin-b-5">Clean Design</h3>
                            <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                        </div>
                        <a class="content-wrapper-link" href="#"></a>
                    </div>
                    <!-- End Work -->
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    <!-- End Work -->

    @endsection