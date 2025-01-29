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
                <div class="image-layer" style="background-image: url(assets/images/resources/hs1.jpg);"></div>
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
                                <p class="main-slider__sub-title">Caring and Compasion</p>
                                <h2 class="main-slider__title">Caring for the vulnerable children in the society</h2>
                                <div class="main-slider__btn-box">
                                    <a href="" class="thm-btn main-slider__btn"> Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-2.png);">
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
                                <p class="main-slider__sub-title">The elderly in the society</p>
                                <h2 class="main-slider__title">Caring for the elderly in the society</h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn"> Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.png);">
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
                                <p class="main-slider__sub-title">Always donate for childrens</p>
                                <h2 class="main-slider__title">Lend a Helping Hand to Those in Need</h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn"> Discover more</a>
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
<section class="about-one">
    
    <div class="container">
        <div class="row">
            
            <div class="col-xl-6">
                <div class="">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">About Hellena hand of compasion</span>

                    </div>
                    <p class="about-one__text">Hellena Hands of Compassion is a beacon of hope, dedicated to
                        transforming lives and uplifting communities through compassion and unwavering support. Our
                        mission revolves around making a lasting difference in the lives of the vulnerable and
                        underserved in society.</p>
                    
                 
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--Causes One Start-->
<section class="causes-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Help & donate to us now</span>
            <h2 class="section-title__title">What we do</h2>
        </div>
        <div class="row">
            <!--Causes One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="assets/images/resources/placeholder.png" alt="">
                        <div class="causes-one__cat">
                            <p>Children</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a href="">Caring for Vulnerable Children</a>
                        </h3>
                        <p class="causes-one__text">We provide essential care and support to children in need, ensuring their well-being
                        and growth in a safe environment.</p>
                    </div>
                </div>
            </div>
            <!--Causes One Single End-->
            <!--Causes One Single Start-->
             <!--Causes One Single Start-->
             <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="assets/images/resources/placeholder.png" alt="">
                        <div class="causes-one__cat">
                            <p>Elderlies</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a href="">Caring for Vulnerable Elderlies</a>
                        </h3>
                        <p class="causes-one__text">Our programs focus on supporting the elderly, ensuring they live with dignity and
                        comfort in their later years.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="assets/images/resources/placeholder.png" alt="">
                        <div class="causes-one__cat">
                            <p>Youth</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a href="">Supporting Youth Programs</a>
                        </h3>
                        <p class="causes-one__text">We empower the youth with mentorship, skills, and opportunities to realize their full
                        potential.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Causes One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="assets/images/resources/placeholder.png" alt="">
                        <div class="causes-one__cat">
                            <p>Children</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a href="">Counseling & Rehabilitation</a>
                        </h3>
                        <p class="causes-one__text">We offer counseling and rehabilitation services to help individuals overcome alcohol
                        addiction and rebuild their lives.</p>
                    </div>
                </div>
            </div>
            <!--Causes One Single End-->
            <!--Causes One Single Start-->
             <!--Causes One Single Start-->
             <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="assets/images/resources/placeholder.png" alt="">
                        <div class="causes-one__cat">
                            <p>Elderlies</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a href="">Revolving Fund Program</a>
                        </h3>
                        <p class="causes-one__text">Our revolving fund program provides financial support to individuals and groups,
                        fostering economic empowerment.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="assets/images/resources/placeholder.png" alt="">
                        <div class="causes-one__cat">
                            <p>Youth</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a href="">Development Programs</a>
                        </h3>
                        <p class="causes-one__text">We focus on community development through education, healthcare, and economic
                        initiatives for sustainable growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Causes One End-->

<!--Become Volunteer One Start-->
<section class="become-volunteer-one">
    <div class="become-volunteer-one__bg-box">
        <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/resources/placeholder.png);"></div>
    </div>
    <div class="become-volunteer-one__shape-1"
        style="background-image: url(assets/images/resources/placeholder.png);"></div>
    <div class="container">
        <div class="become-volunteer-one__inner">
            <p class="become-volunteer-one__sub-title">Make a difference</p>
            <h3 class="become-volunteer-one__title">Help us raise money for our humanitarian causes. Your generous donation can make a significant impact.
            Donate.
            </h3>
            <div class="become-volunteer-one__btn-box">
                <a href="" class="thm-btn become-volunteer-one__btn">Donate</a>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer One End-->


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
                                <h3 class="feature-one__top-title"><a href="donate.html">Give Hope with<br> Your Gift</a></h3>
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
                    <a href="donate.html" class="thm-btn feature-one__btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Feature One End-->




<!-- FAQ One Start -->
<section class="faq-one">
    <div class="faq-one-shape-1" style="background-image: url(assets/images/shapes/faq-one-shape-1.png);"></div>
    <div class="faq-one-bg" style="background-image: url(assets/images/backgrounds/faq-one-bg.png);"></div>
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
                    <a href="faq.html" class="thm-btn faq-one__btn">Learn how to get involved</a>
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
