@extends('layouts.main')
@section('content')
<div class="stricky-header stricked-menu main-menu">

    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Main Slider Start-->
<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/child/c2.jpeg);"></div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1"
                    style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                <div class="main-slider-shape-2 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">Caring and Compassion</p>
                                <h2 class="main-slider__title">Caring for the vulnerable children in the society</h2>
                                <div class="main-slider__btn-box">
                                    <a href="/donate" class="thm-btn main-slider__btn"> Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/fwe/WhatsApp%20Image%202025-01-29%20at%2011.18.17%20PM.jpeg);">
                </div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1"
                    style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                <div class="main-slider-shape-2 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">Taking Care of all </p>
                                <h2 class="main-slider__title">Caring for Our elderly in the society </h2>
                                <div class="main-slider__btn-box">
                                    <a href="/donate" class="thm-btn main-slider__btn"> Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/ours/children.jpeg);">
                </div>
                <!-- /.image-layer -->

                <div class="main-slider-shape-1"
                    style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                <div class="main-slider-shape-2 float-bob-x">
                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">Lend help</p>
                                <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                <div class="main-slider__btn-box">
                                    <a href="/donate" class="thm-btn main-slider__btn">Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->

<!--About One Start-->
<section class="about-one py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-xl-6">
                <div class="">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">IMPACTING ONE LIFE AT A TIME</span>
                    </div>
                    <p class="about-one__text">
                        Hellena Hand of Compassion is a registered organization that has been running missions and outreach programs, working to heal and uplift communities. We work with vulnerable children, the elderly, and youth in the community—impacting one life at a time.
                    </p>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-xl-6">
                <div class="about-one__image text-center gallery-page__single">
                    <img src="assets/images/fwe/WhatsApp%20Image%202025-01-29%20at%2011.18.12%20PM%20(1).jpeg" alt="About Us" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->


<!--Causes One Start-->
@include('wwd')
<!--Causes One End-->
<!--Feature One Start-->
<section class="feature-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="feature-one__single">
                    <div class="feature-one__single-bg" style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                    <div class="feature-one__top">
                        <div class="feature-one__top-inner">
                            <div class="feature-one__top-icon">
                                <span class="icon-help"></span>
                            </div>
                            <div class="feature-one__top-title-box">
                                <h3 class="feature-one__top-title"><a href="become-volunteer.html">Join Hands &<br> Make a Difference</a></h3>
                            </div>
                        </div>
                    </div>
                    <p class="feature-one__text">Be part of a movement that brings hope and support to those in need. <br> Your time and effort can change lives.</p>
                    <ul class="list-unstyled feature-one__point">
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="text">
                                <p>Support vulnerable communities.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="text">
                                <p>Make an impact through kindness.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="text">
                                <p>Volunteer to spread compassion.</p>
                            </div>
                        </li>
                    </ul>
                    <a href="become-volunteer.html" class="thm-btn feature-one__btn">Join Us</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="feature-one__single feature-one__single--two">
                    <div class="feature-one__single-bg" style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>
                    <div class="feature-one__top">
                        <div class="feature-one__top-inner">
                            <div class="feature-one__top-icon feature-one__top-icon--two">
                                <span class="icon-gift-box"></span>
                            </div>
                            <div class="feature-one__top-title-box">
                                <h3 class="feature-one__top-title"><a href="/donate">Give Hope with<br> Your Gift</a></h3>
                            </div>
                        </div>
                    </div>
                    <p class="feature-one__text">Your generosity can provide food, education, and shelter to those who need it most.<br> Every donation matters.</p>
                    <ul class="list-unstyled feature-one__point">
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="text">
                                <p>Empower lives through giving.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="text">
                                <p>Support children and families in need.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="text">
                                <p>Be a beacon of hope today.</p>
                            </div>
                        </li>
                    </ul>
                    <a href="/donate" class="thm-btn feature-one__btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Feature One End-->




<!-- FAQ One Start -->
<section class="faq-one">
    <div class="faq-one-shape-1" style="background-image: url(assets/images/shapes/faq-one-shape-1.png);"></div>
    <div class="faq-one-bg" style=""></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="faq-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Frequently Asked Questions</span>
                        <h2 class="section-title__title">Common Questions About Our Work</h2>
                    </div>
                    <p class="faq-one__text-1">
                        Here are some of the most common questions about our charity initiatives, how you can help, and the impact we make.
                    </p>
                   
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="faq-one__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>How can I donate to Hellena Hands of Compassion?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>You can donate through our website using M-Pesa, bank transfer, or PayPal. Visit the "Donate" page for details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>How does my donation help?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Your donation supports food programs, education for underprivileged children, medical aid, and community development projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Can I volunteer with your organization?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Yes! We welcome volunteers for outreach programs, fundraising, and community initiatives. Visit our "Get Involved" page to sign up.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accrodion last-chiled">
                            <div class="accrodion-title">
                                <h4>Do you provide financial assistance to individuals?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We focus on sustainable community projects rather than direct financial aid. However, we offer scholarships and support programs for those in need.</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ One End -->

<!--News One End-->
@endsection
