@extends('layouts.app')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}

{{--        </div>--}}
{{--    </div>--}}
<div class="landing-wrapper">

    <header class="site-header">
        <div class="container">
            <div class="row justify-content-center align-items-center position-relative">
                <div class="col-sm-4 col-6 col-lg-2 col-xl-2 order-lg-1">
                    <div class="brand">
                        <a href=""><img src="image/main-logo.png" alt="" /></a>
                    </div>
                </div>

                <div class="col-sm-7 col-lg-3 col-xl-3 offset-xl-1 d-none d-sm-block order-lg-3">
                    <div class="header-btns">
                        <div class="btn-1 btn-outlined">
                            <a href="#">Login</a>
                        </div>
                        <div class="btn-2">
                            <a href="#">Download trial</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1 col-6 col-lg-7 col-xl-6 position-static order-lg-2">
                    <div class="main-navigation">
                        <ul class="main-menu">
                            <li class="menu-item has-dropdown">
                                <a href="#features">Free Landing Pages</a>
                                <ul class="menu-dropdown">
                                    <li class="single-item">
                                        <a href="../s01/index.html">
                                            <h3>Mobile Application</h3>
                                            <p>Best for Mobile App Presentation</p>
                                        </a>
                                    </li>
                                    <li class="single-item">
                                        <a href="../s02/index.html">
                                            <h3>Web Application</h3>
                                            <p>Best for Mobile App Presentation</p>
                                        </a>
                                    </li>
                                    <li class="single-item">
                                        <a href="../s03/index.html">
                                            <h3>SaaS Application</h3>
                                            <p>Best for Mobile App Presentation</p>
                                        </a>
                                    </li>
                                    <li class="single-item">
                                        <a href="../s04/index.html">
                                            <h3> SaaS Subscription</h3>
                                            <p>Best for Mobile App Presentation</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item "><a href="#features">Features</a></li>

                            <li class="menu-item"><a href="#">Services</a></li>

                            <li class="menu-item"><a href="#pricing">Pricing</a></li>

                            <li class="menu-item"><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="mobile-menu"></div>
                </div>

            </div>
        </div>
    </header>

    <div class="hero-area pt-4 pt-lg-5">
        <div class="float-shapes">
        </div>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-md-8 col-lg-7 offset-lg-2">
                    <h1 class="main-title">Landing page built for software.</h1>

                </div>
                <div class="col-md-8 col-lg-6 offset-lg-2">
                    <div class="hero-content-wrapper">
                        <div class="main-content">
                            <p>Create custom landing pages with Shades that convert more visitors than any
                                website—no
                                coding required.</p>

                        </div>
                        <div class="compatible">
                            <span>Compitable with:</span>
                            <ul class="compatible-list">
                                <li class="list-item"><img src="image/compatible-1.png" alt=""></li>
                                <li class="list-item"><img src="image/compatible-2.png" alt=""></li>
                                <li class="list-item"><img src="image/compatible-3.png" alt=""></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 pt-lg-5">
                    <div class="hero-btn">
                        <a href="" class="btn btn--primary btn-height-60">Download free trial</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hero-img">
                        <img src="image/laptop-image.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Client-Section -->

    <section class="client-section">
        <div class="container">
            <div class="client-brand-wrapper">
                <div class="single-brand">
                    <img src="image/logo-5.png" alt=""/>
                </div>

                <div class="single-brand">
                    <img src="image/logo-4.png" alt="">
                </div>

                <div class="single-brand">
                    <img src="image/logo-3.png" alt="">
                </div>

                <div class="single-brand">
                    <img src="image/logo-2.png" alt="">
                </div>

                <div class="single-brand">
                    <img src="image/logo-1.png" alt="">
                </div>
            </div>

        </div>
    </section>

    <!-- Content Area 01-->
    <section class="content-section-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-5  col-md-6 col-sm-8">
                    <div class="content-image">
                        <img src="./image/content-image-1.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="content-right-content">
                        <h2>Build Beautiful
                            Landing Pages Faster.</h2>
                        <p>
                            Create custom landing pages with Shades that convert more visitors than any website, no
                            coding required.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Area 02 -->
    <section class="content-section-02">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-sm-10 col-md-6 col-10 order-md-2 offset-xl-1 d-none d-md-block">
                    <div class="content-image">
                        <img src="./image/content-image-2.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-sm-12 col-md-6 order-md-1">
                    <div class="content-text content-left-content">
                        <h2>Completely Free for Everyone.</h2>
                        <div class="content-small-card">
                            <div class="card-icon">
                                <i class="icon icon-users-mm-2"></i>
                            </div>
                            <div class="card-content">
                                <h5>Built for real users</h5>
                                <p>
                                    Editing and customizing Essential Landing is easy and fast.
                                </p>
                            </div>
                        </div>
                        <div class="content-small-card">
                            <div class="card-icon">
                                <i class="icon icon-settings"></i>
                            </div>
                            <div class="card-content">
                                <h5>Easy setup process</h5>
                                <p>
                                    Editing and customizing Essential Landing is easy and fast.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Content Area -->
    <section class="content-section-03">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-sm-6 col-md-6 col-10 d-none d-md-block">
                    <div class="content-img">
                        <img src="./image/content-image-3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 offset-xl-1 col-sm-12">
                    <div class="content-right-content">
                        <h2>Never miss a thing</h2>
                        <p>
                            Event is not like most tech conferences. We want our presentations to engage the
                            audience, spark discussion and inspire new ideas.
                        </p>
                        <ul class="content-list">
                            <li>
                                <span><i class="icon icon-check-2"></i></span>Unlimited design
                                possibility
                            </li>
                            <li>
                                <span><i class="icon icon-check-2"></i></span>Completely
                                responsive
                            </li>
                            <li>
                                <span><i class="icon icon-check-2"></i></span>Easy to
                                customize
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area-->
    <section class="feature-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>One Software, Every Solution</h2>
                        <p>We designed and tested prototypes that helped identify pain points in the account
                            creation process. Together, we shaped the new standard.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row mb-d-30">
                        <div class="col-sm-6 mb--30">
                            <div class="feature-widget">
                                <div class="widget-icon">
                                    <i class="icon icon-edit-72"></i>
                                </div>
                                <div class="content">
                                    <h5>Easy to Use</h5>
                                    <p>Whether it’s a small internal app or a new for millions of customers, our
                                        design
                                        and development teams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb--30">
                            <div class="feature-widget">
                                <div class="widget-icon">
                                    <i class="icon icon-layers-3"></i>
                                </div>
                                <div class="content">
                                    <h5>300+ Blocks</h5>
                                    <p>Whether it’s a small internal app or a new for millions of customers, our
                                        design
                                        and development teams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb--30">
                            <div class="feature-widget">
                                <div class="widget-icon">
                                    <i class="icon icon-tablet-mobile"></i>
                                </div>
                                <div class="content">
                                    <h5>100% Responsive</h5>
                                    <p>Whether it’s a small internal app or a new for millions of customers, our
                                        design
                                        and development teams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb--30">
                            <div class="feature-widget">
                                <div class="widget-icon">
                                    <i class="icon icon-book-open-2"></i>
                                </div>
                                <div class="content">
                                    <h5>Rich Documentation</h5>
                                    <p>Whether it’s a small internal app or a new for millions of customers, our
                                        design
                                        and development teams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb--30">
                            <div class="feature-widget">
                                <div class="widget-icon">
                                    <i class="icon icon-webpage"></i>
                                </div>
                                <div class="content">
                                    <h5>50+ New Pages</h5>
                                    <p>Whether it’s a small internal app or a new for millions of customers, our
                                        design
                                        and development teams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb--30">
                            <div class="feature-widget">
                                <div class="widget-icon">
                                    <i class="icon icon-l-settings"></i>
                                </div>
                                <div class="content">
                                    <h5>Quick Setup</h5>
                                    <p>Whether it’s a small internal app or a new for millions of customers, our
                                        design
                                        and development teams.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Area -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>30,000+ Customers Trust Us</h2>
                        <p>We designed and tested prototypes that helped identify pain points in the account
                            creation process. Together, we shaped the new standard.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-wrapper">
                <div class="row justify-content-center position-relative">
                    <div class="col-lg-10 ">
                        <div class="testimonial-slider">
                            <div class="single-slide">
                                <div class="testimonial-content">
                                    <p>
                                        “It’s really helped us grow. I can keep all of the customer’s information in
                                        there so if I need to look up something in the future or call them for a
                                        follow-up, I have all of that there so it’s really helped us organize the
                                        whole business.”
                                    </p>
                                    <div class="t-small-card">
                                        <div class="image">
                                            <img src="./image/t6-nav-1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h5>Gilbert Palmer</h5>
                                            <span>Founder of Crips</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="testimonial-content">
                                    <p>
                                        “It’s really helped us grow. I can keep all of the customer’s information in
                                        there so if I need to look up something in the future or call them for a
                                        follow-up, I have all of that there so it’s really helped us organize the
                                        whole business.”
                                    </p>
                                    <div class="t-small-card">
                                        <div class="image">
                                            <img src="./image/t6-nav-2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h5>Lucy Rios</h5>
                                            <span>Design Director at Craze</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="testimonial-content">
                                    <p>
                                        “It’s really helped us grow. I can keep all of the customer’s information in
                                        there so if I need to look up something in the future or call them for a
                                        follow-up, I have all of that there so it’s really helped us organize the
                                        whole business.”
                                    </p>
                                    <div class="t-small-card">
                                        <div class="image">
                                            <img src="./image/t3-nav-1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h5>Sallie Lawson</h5>
                                            <span>Owner of Crips</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-btns"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-inner-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="cta-content">
                            <span class="title-small-text">Ready to take action?</span>
                            <h2>Try our free software!</h2>
                            <p>We designed and tested prototypes that helped identify pain points in the account
                                creation process. Together, we shaped the new standard.</p>
                            <div class="cta-btn">
                                <a href="" class="btn btn-outlined--white btn-with-icon btn-height-60"><i
                                            class="icon icon-cloud-download-95"></i> Download Now</a>
                                <p class="extra-info-text">No credit card required</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-2 col-md-3 ">
                    <div class="footer-logo">
                        <img src="image/footer-logo.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6  offset-lg-1">
                    <ul class="nav footer-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>


                <div class="col-lg-2 col-md-3 offset-lg-1">
                    <ul class="footer-social-list">
                        <li>
                            <a href="">
                                <i class="icon icon-logo-fb-simple"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="icon icon-logo-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="icon icon-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="copyright">
                <p>©2020 All right reserved. </p>
            </div>
        </div>
    </section>
</div>
@endsection
