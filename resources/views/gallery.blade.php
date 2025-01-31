@extends('layouts.main')
@section('content')

<style>
    .hidden {
    display: none;
}
</style>

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


        @php
            $sections = [
                ['id' => 'eld', 'title' => 'Fellowship with the Elderly', 'path' => 'assets/images/fwe/'],
                ['id' => 'prison', 'title' => 'Prison Ministry', 'path' => 'assets/images/pm/'],
                ['id' => 'youth', 'title' => 'Youth Mentorship Program', 'path' => 'assets/images/ymp/'],
                ['id' => 'child', 'title' => 'Children Ministry', 'path' => 'assets/images/child/'],
                ['id' => 'med', 'title' => 'Medical Camp', 'path' => 'assets/images/mc/'],
                ['id' => 'partners', 'title' => 'Partners', 'path' => 'assets/images/patners/'],
            ];
        @endphp

        @foreach ($sections as $section)
            <div class="row gallery-section" id="{{ $section['id'] }}">
                <h2>{{ $section['title'] }}</h2><br><br>

                @php
                    $imagePath = public_path($section['path']);
                    $images = [];
                    if (File::exists($imagePath)) {
                        $files = File::files($imagePath);
                        foreach ($files as $file) {
                            $images[] = asset($section['path'] . $file->getFilename());
                        }
                    }
                @endphp

                @foreach($images as $index => $image)
                    <div class="col-xl-4 col-lg-6 col-md-6 gallery-item {{ $index >= 6 ? 'hidden' : '' }}">
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

                @if (count($images) > 6)
                    <div class="col-12 text-center">
                        <button class="thm-btn show-more" data-target="{{ $section['id'] }}">Show More</button>
                    </div>
                @endif
            </div>
        @endforeach
        <br>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".show-more").forEach(button => {
        button.addEventListener("click", function () {
            let targetId = this.getAttribute("data-target");
            let section = document.getElementById(targetId);
            
            section.querySelectorAll(".hidden").forEach(item => {
                item.classList.remove("hidden");
            });

            this.style.display = "none"; // Hide button after showing all images
        });
    });
});

</script>

@endsection