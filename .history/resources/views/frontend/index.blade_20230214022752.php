@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="bg-gray-100 mb-20">
<!-- banner-style-two -->
<section class="banner-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-2.png)"></div>
    <div class="auto-container">
        
        <div class="content-box">
            <h1>Data Analytics Techniques<br />with Detox Systems.</h1>
            <div class="auto-container">
                <div class="row">
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow flipInY animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: flipInY;">
                            <div class="inner-box js-tilt" style="will-change: transform; transform: perspective(700px) rotateX(0deg) rotateY(0deg);">
                                <div class="icon-box">
                                    <div class="anim-icon">
                                        <span class="icon icon-1"></span>
                                        <span class="icon icon-2"></span>
                                        <span class="icon icon-3"></span>
                                    </div>
                                    <i class="flaticon-tools-and-utensils"></i>
                                </div>
                                <h3><a href="index-2.html">Cloud Compatible</a></h3>
                                <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor.</p>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn style-two">Learn More</a></div>
                            <div class="js-tilt-glare" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden;"><div class="js-tilt-glare-inner" style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); width: 740px; height: 740px; transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0;"></div></div></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow flipInY animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: flipInY;">
                            <div class="inner-box js-tilt" style="will-change: transform; transform: perspective(700px) rotateX(0deg) rotateY(0deg);">
                                <div class="icon-box">
                                    <div class="anim-icon">
                                        <span class="icon icon-1"></span>
                                        <span class="icon icon-2"></span>
                                        <span class="icon icon-3"></span>
                                    </div>
                                    <i class="flaticon-checked"></i>
                                </div>
                                <h3><a href="index-2.html">Security Guaranteed</a></h3>
                                <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor.</p>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn style-two">Learn More</a></div>
                            <div class="js-tilt-glare" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden;"><div class="js-tilt-glare-inner" style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); width: 740px; height: 740px; transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0;"></div></div></div>
                        </div>
                    </div> --}}
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
                                <h3><a href="index-2.html">Multipal Features</a></h3>
                                <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor.</p>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn style-two">Learn More</a></div>
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