@extends('layouts.parent2')

@section('title', 'Jatayu')

@section('blog')

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
        <div class="parallax-content container">
            <h4 class="text-center" style="color: #ffffff; font-size: 50px">Judul Blog</h4>
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!-- konten -->
    <!-- Latest Products -->
    <div class="container content-lg">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 sm-margin-b-50">
            <div class="margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="img-responsive" src="{{asset('img/970x647/01.jpg')}}" alt="Latest Products Image">
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <!-- End Latest Products -->

    <!-- konten -->

    @endsection