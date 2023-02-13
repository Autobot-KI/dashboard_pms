@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="bg-gray-100 mb-20">
<!-- banner-style-two -->
<img class="mt-4" src="https://labkimiafarma.co.id/assets/logo/KFDLogo_min.png" alt="" style="height:50px; margin-top:10px">
<section class="banner-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-2.png)"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Dashboard Kimia Farma Diagnostika<br /></h1>
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow flipInY animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: flipInY;">
                            <div class="inner-box js-tilt">
                                <div class="icon-box">
                                    <div class="anim-icon">
                                        <span class="icon icon-1"></span>
                                        <span class="icon icon-2"></span>
                                        <span class="icon icon-3"></span>
                                    </div>
                                    <i class="flaticon-pie-chart"></i>
                                </div>
                                <h3><a href="index-2.html">Monitoring Project 11</a></h3>
                                <p></p>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn style-two">Lihat</a></div>
                            <div class="js-tilt-glare" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden;"><div class="js-tilt-glare-inner" style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); width: 740px; height: 740px; transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0;"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-box">
            <div class="pattern-layer" style="background-image: url(http://azim.commonsupport.com/Detox/assets/images/shape/pattern-9.png);"></div>
                <figure class="image image-1"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-1.png') }}" alt=""></figure>
                <figure class="image image-2"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-2.png') }}" alt=""></figure>
                <figure class="image image-3 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-3.png') }}" alt=""></figure>
                <figure class="image image-4 float-bob-y"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-4.png') }}" alt=""></figure>
                <figure class="image image-5"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-5.png') }}" alt=""></figure>
                <figure class="image image-6"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-6.png') }}" alt=""></figure>
                <figure class="image image-7"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-7.png') }}" alt=""></figure>
                <figure class="image image-8 float-bob-y"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-8.png') }}" alt=""></figure>
                <figure class="image image-9 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-9.png') }}" alt=""></figure>
                <figure class="image image-10 wow bounceInDown" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-10.png') }}" alt=""></figure>
                <figure class="image image-11 wow bounceInDown" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="{{ asset('http://azim.commonsupport.com/Detox/assets/images/banner/banner-2-11.png') }}" alt=""></figure>
            </div>
        </div>
    </div>
</section>
<!-- banner-style-two end -->
</section>


@endsection