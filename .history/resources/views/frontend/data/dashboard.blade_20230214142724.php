@extends('frontend.layouts.app')

@section('title') Dashboard - {{ config('app.name') }} @endsection
@section('content')
<div class="header-upper clearfix">
    <div class="outer-box pull-left">
        <div class="logo-box pull-left">
            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
        </div>
        <div class="menu-area pull-left">
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </div>
            <nav class="main-menu navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                        <li class="dropdown"><a href="choose-element.html">Home</a>
                            <ul>
                                <li><a href="index.html">Home Page One</a></li>
                                <li><a href="index-2.html">Home Page Two</a></li>
                                <li><a href="index-3.html">Home Page Three</a></li>
                                <li><a href="index-boxed.html">Home Boxed</a></li>
                                <li><a href="index-onepage.html">Home OnePage</a></li>
                                <li class="dropdown"><a href="choose-element.html">Home Page</a>
                                    <ul>
                                        <li><a href="index.html">Home Page One</a></li>
                                        <li><a href="index-2.html">Home Page Two</a></li>
                                        <li><a href="index-3.html">Home Page Three</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                            </ul>
                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li> 
                        <li class="dropdown"><a href="choose-element.html">Services</a>
                            <ul>
                                <li><a href="service.html">Services One</a></li>
                                <li><a href="service-2.html">Services Two</a></li>
                            </ul>
                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                        <li class="dropdown"><a href="choose-element.html">Pages</a>
                            <ul class="megamenu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="service.html">Services One</a></li>
                                <li><a href="team-element-2.html">Team Elements 02</a></li>
                                <li><a href="feature-element-1.html">Feature Elements 01</a></li>
                                <li><a href="portfolio.html">Portfolio Grid</a></li>
                                <li><a href="service-2.html">Services Two</a></li>
                                <li><a href="counter-element-1.html">Counter Elements 01</a></li>
                                <li><a href="feature-element-2.html">Feature Elements 02</a></li>
                                <li><a href="portfolio-2.html">Portfolio Masonry</a></li>
                                <li><a href="error.html">Error Page</a></li>
                                <li><a href="counter-element-2.html">Counter Elements 02</a></li>
                                <li><a href="about-element-1.html">About Elements 01</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="about-element-2.html">About Elements 02</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="service-element.html">Service Elements</a></li>
                                <li><a href="process-element-1.html">Process Elements 01</a></li>
                                <li><a href="faq.html">Faq's</a></li>
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="faq-element.html">Faq's Elements</a></li>
                                <li><a href="process-element-2.html">Process Elements 02</a></li>
                                <li><a href="pricing.html">Pricing Plan</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="choose-element.html">Choose Elements</a></li>
                                <li><a href="team-element-1.html">Team Elements 01</a></li>
                            </ul>
                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                        <li class="current dropdown"><a href="choose-element.html">Elements</a>
                            <ul>
                                <li class="dropdown"><a href="choose-element.html">Feature Elements</a>
                                    <ul>
                                        <li><a href="feature-element-1.html">Feature Elements 01</a></li>
                                        <li><a href="feature-element-2.html">Feature Elements 02</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="choose-element.html">About Elements</a>
                                    <ul>
                                        <li><a href="about-element-1.html">About Elements 01</a></li>
                                        <li><a href="about-element-2.html">About Elements 02</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="choose-element.html">Blog Elements</a>
                                    <ul>
                                        <li><a href="blog-element-1.html">Blog Elements 01</a></li>
                                        <li><a href="blog-element-2.html">Blog Elements 02</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="choose-element.html">Process Elements</a>
                                    <ul>
                                        <li><a href="process-element-1.html">Process Elements 01</a></li>
                                        <li><a href="process-element-2.html">Process Elements 02</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="choose-element.html">Counter Elements</a>
                                    <ul>
                                        <li><a href="counter-element-1.html">Counter Elements 01</a></li>
                                        <li><a href="counter-element-2.html">Counter Elements 02</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="choose-element.html">Team Elements</a>
                                    <ul>
                                        <li><a href="team-element-1.html">Team Elements 01</a></li>
                                        <li><a href="team-element-2.html">Team Elements 02</a></li>
                                    </ul>
                                <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                                <li><a href="service-element.html">Service Elements</a></li>
                                <li><a href="faq-element.html">Faq's Elements</a></li>
                                <li><a href="choose-element.html">Choose Elements</a></li>
                            </ul>
                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>
                        <li class="dropdown"><a href="choose-element.html">Blog</a>
                            <ul>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div></li>                              
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="menu-right-content pull-right">
        <div class="phone">Call Us <a href="tel:880762009">+880.762.009</a></div>
        <div class="btn-box"><a href="choose-element.html">Login</a></div>
    </div>
</div>
<section class="banner-style-two">
            <div class="sec-title text-center mt-4">
                <p>Dashboard Project 11</p>
                <h2>PELAYANAN</h2>
            </div>
            <iframe title="Project 11" width="100%" height="800px"
                src="https://app.powerbi.com/view?r=eyJrIjoiMzIxYTE2NzItYjU4Zi00NjQ0LWJkYjAtZTFjZDU5OWMzNzA0IiwidCI6ImY5ZGM2OTdmLTI4ZmUtNDU2My1hM2FhLWE2NTg2M2ZlN2YxYSIsImMiOjEwfQ%3D%3D&pageName=ReportSection"
                frameborder="0" allowFullScreen="true"></iframe>
        
    </div>
    </div>
    @endsection