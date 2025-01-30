@extends('layouts.main')
@section('content')

<section class="gallery-page">
    <div class="container">
        <div class="row">
            @php
                $imagePath = public_path('assets/images/ours');
                $images = [];
                if (File::exists($imagePath)) {
                    $files = File::files($imagePath);
                    foreach ($files as $file) {
                        $images[] = asset('assets/images/ours/' . $file->getFilename());
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