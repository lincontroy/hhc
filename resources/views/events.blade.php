@extends('layouts.main')
@section('content')

<section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Events</li>
                    </ul>
                    <h2>Events</h2>
                </div>
            </div>
        </section>


        <section class="container">
        <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Fellowship Card -->
                <div class="card shadow-lg border-light mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Monthly Fellowship with the Elderly</h4>
                        <p class="card-text">Every last Saturday of the month</p>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            We have a monthly fellowship with the elderly, held every last Saturday of the month. This fellowship offers a platform for the elderly to mingle and share warmth, love, and life experiences. During the fellowship, the following activities take place:
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>1. A platform for the elderly to mingle and share warmth and love of life experiences</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>2. Conversations on health and mental wellness</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>3. Sharing a cup of great porridge</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>4. Singing and sharing devotion</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>5. Sharing food packages</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <p class="text-muted">Join us for this heartwarming event every month!</p>
                    </div>
                </div>

                <!-- Medical Camp Card -->
                <div class="card shadow-lg border-light">
                    <div class="card-header">
                        <h4 class="card-title">Annual Medical Camp</h4>
                        <p class="card-text">Every 1st Quarter of the year (April/May)</p>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            Every year for the past 4 years, we host a major Medical Camp that serves the community with:
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>1. Free medical checks</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>2. Free consultations</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>3. Free screening</strong>
                            </li>
                            <li class="list-group-item">
                                <strong>4. Free treatment and medication</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <p class="text-muted">Don't miss out on this life-saving event every year!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>
        <!--Page Header End-->

<!--Causes One End-->
@endsection