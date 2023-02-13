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
            <div class="image-box">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-9.png);"></div>
                <figure class="image image-1"><img src="{{ asset('detox/assets/images/banner/banner-2-1.png') }}" alt=""></figure>
                <figure class="image image-2"><img src="{{ asset('detox/assets/images/banner/banner-2-2.png') }}" alt=""></figure>
                <figure class="image image-3 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('detox/assets/images/banner/banner-2-3.png') }}" alt=""></figure>
                <figure class="image image-4 float-bob-y"><img src="{{ asset('detox/assets/images/banner/banner-2-4.png') }}" alt=""></figure>
                <figure class="image image-5"><img src="{{ asset('detox/assets/images/banner/banner-2-5.png') }}" alt=""></figure>
                <figure class="image image-6"><img src="{{ asset('detox/assets/images/banner/banner-2-6.png') }}" alt=""></figure>
                <figure class="image image-7"><img src="{{ asset('detox/assets/images/banner/banner-2-7.png') }}" alt=""></figure>
                <figure class="image image-8 float-bob-y"><img src="{{ asset('detox/assets/images/banner/banner-2-8.png') }}" alt=""></figure>
                <figure class="image image-9 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('detox/assets/images/banner/banner-2-9.png') }}" alt=""></figure>
                <figure class="image image-10 wow bounceInDown" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="{{ asset('detox/assets/images/banner/banner-2-10.png') }}" alt=""></figure>
                <figure class="image image-11 wow bounceInDown" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="{{ asset('detox/assets/images/banner/banner-2-11.png') }}" alt=""></figure>
            </div>
        </div>
    </div>
</section>
<!-- banner-style-two end -->
</section>


@endsection