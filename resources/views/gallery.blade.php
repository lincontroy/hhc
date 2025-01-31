@extends('layouts.main')
@section('content')

<style>
    .gallery-page__img img {
        width: 100%; /* Ensures images fit the container */
        height: 250px; /* Fixed height for uniformity */
        object-fit: cover; /* Ensures the image covers the area without distortion */
        border-radius: 10px; /* Optional: Rounded corners for aesthetics */
    }
</style>

<section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fwe/WhatsApp%20Image%202025-01-29%20at%2011.18.17%20PM.jpeg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Gallery</li>
                    </ul>
                    <h2>Gallery</h2>
                </div>
            </div>
        </section>

<section class="gallery-page">
    <div class="container">
        <div class="row" id="eld">
            <h2>Fellowship with the Elderly</h2><br><br>

            @php
                $imagePath = public_path('assets/images/fwe/');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/fwe/' . $file->getFilename());
                    }
                }
            @endphp

            @foreach($images as $image)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <img src="{{ $image }}" alt="Gallery Image">
                            <a href="{{ $image }}" class="img-popup"></a>
                            <div class="gallery-page__content">
                                <p class="gallery-page__sub-title">Charity</p>
                                <h5 class="gallery-page__title"><a href="gallery.html">Gallery</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row" id="prison">
            <h2>Prison ministry</h2><br><br>

            @php
                $imagePath = public_path('assets/images/pm/');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/pm/' . $file->getFilename());
                    }
                }
            @endphp

            @foreach($images as $image)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <img src="{{ $image }}" alt="Gallery Image">
                            <a href="{{ $image }}" class="img-popup"></a>
                            <div class="gallery-page__content">
                                <p class="gallery-page__sub-title">Charity</p>
                                <h5 class="gallery-page__title"><a href="gallery.html">Gallery</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row" id="youth">
            <h2>Youth mentorship program</h2><br><br>

            @php
                $imagePath = public_path('assets/images/ymp/');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/ymp/' . $file->getFilename());
                    }
                }
            @endphp

            @foreach($images as $image)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <img src="{{ $image }}" alt="Gallery Image">
                            <a href="{{ $image }}" class="img-popup"></a>
                            <div class="gallery-page__content">
                                <p class="gallery-page__sub-title">Charity</p>
                                <h5 class="gallery-page__title"><a href="gallery.html">Gallery</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row" id="child">
            <h2>Children ministry</h2><br><br>

            @php
                $imagePath = public_path('assets/images/child/');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/child/' . $file->getFilename());
                    }
                }
            @endphp

            @foreach($images as $image)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <img src="{{ $image }}" alt="Gallery Image">
                            <a href="{{ $image }}" class="img-popup"></a>
                            <div class="gallery-page__content">
                                <p class="gallery-page__sub-title">Charity</p>
                                <h5 class="gallery-page__title"><a href="gallery.html">Gallery</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row" id="med">
            <h2>Medical camp</h2><br><br>

            @php
                $imagePath = public_path('assets/images/mc/');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/mc/' . $file->getFilename());
                    }
                }
            @endphp

            @foreach($images as $image)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <img src="{{ $image }}" alt="Gallery Image">
                            <a href="{{ $image }}" class="img-popup"></a>
                            <div class="gallery-page__content">
                                <p class="gallery-page__sub-title">Charity</p>
                                <h5 class="gallery-page__title"><a href="gallery.html">Gallery</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row" id="partners">
            <h2>Partners</h2><br><br>

            @php
                $imagePath = public_path('assets/images/patners/');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/patners/' . $file->getFilename());
                    }
                }
            @endphp

            @foreach($images as $image)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                            <img src="{{ $image }}" alt="Gallery Image">
                            <a href="{{ $image }}" class="img-popup"></a>
                            <div class="gallery-page__content">
                                <p class="gallery-page__sub-title">Charity</p>
                                <h5 class="gallery-page__title"><a href="gallery.html">Gallery</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row">
            <h2>Our Videos</h2><br><br>

            @php
                $imagePath = public_path('assets/images/vid/');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/vid/' . $file->getFilename());
                    }
                }
            @endphp

            @foreach($images as $image)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-page__single">
                        <div class="gallery-page__img">
                        <video controls width="100%">
                        <source src="{{ $image }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                            
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>


@endsection