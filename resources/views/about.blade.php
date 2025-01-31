@extends('layouts.main')

@section('content')

  <!--Page Header Start-->
  <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Pages</li>
                    </ul>
                    <h2>About us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

      <!-- About Hellena Hands of Compassion Start -->
<section class="about-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-four__left">
                    <div class="about-four__img-box">
                        <div class="about-four__img">
                            <img src="assets/images/ours/children.jpeg" alt="Helping Hands">
                        </div>
                       
                        <div class="about-four__border"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-four__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">We strive to impact one life at a time</span>
                        <h2 class="section-title__title">Bringing Hope and Transforming Lives</h2>
                    </div>
                    <p class="about-four__text">
                        At <strong>Hellena Hands of Compassion</strong>, we believe in making a difference—one life at a time. 
                        Our mission is to support the vulnerable, provide essential resources, and uplift communities through acts of kindness and generosity. 
                        From feeding programs to education sponsorships, we are dedicated to creating a world where everyone has a chance to thrive.
                    </p>
                    <ul class="list-unstyled about-four__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Providing food, shelter, and healthcare to those in need.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Empowering communities through education and skills training.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Spreading love, hope, and compassion to transform lives.</p>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Hellena Hands of Compassion End -->

@endsection