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

<section class="gallery-page">
    <div class="container">
        <div class="row">
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
        <div class="row">
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

        <div class="row">
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

        <div class="row">
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
        <div class="row">
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
    </div>
</section>


@endsection