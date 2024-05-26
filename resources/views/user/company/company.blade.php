@php
    $company_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single">Company</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Company</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- About us Area S t a r t -->
    <section class="about-area top-bottom-padding2">
        <div class="container">
            <div class="row g-24 justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-tittle mb-50">
                        <h2 class="title mb-20 font-700">About Us</h2>
                        <div class="pera indented">{!! nl2br($company->history) !!}</div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="position-relative">
                        <img class="w-100 " src="{{ asset('files') }}/company/{{ $company->image }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of About us Area -->

    <!-- Our event S t a r t-->
    <section class="our-event bottom-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <h2 class="title font-700">The Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                @if ($company)
                    @foreach ($teams as $team)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 view-wrapper">
                            <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.0s">
                                <div class="event-img position-relative">
                                    <a href="event-details.html"> <img src="files/team/{{ $team->image }}"
                                            class="img-fluid w-100" alt="img"> </a>
                                </div>
                                <div class="event-info">
                                    <div class="d-flex justify-content-center align-items-center gap-6">
                                        <div class="event-info-title">
                                            <h4
                                                class="title mb-18 text-capitalize flex gap-15 align-items-center justify-content-center flex-wrap">
                                                {{ $team->name }} </h4>
                                            <div class="flex gap-15 align-items-center justify-content-center flex-wrap">
                                                <p class="info"> {{ $team->position }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End-of All Product -->

    <!-- Blog S t a r t -->
    <section class="blog-section bottom-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <h2 class="title font-700">Achievements</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                @if ($company)
                    @foreach ($achievements as $achiev)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 view-wrapper">
                            <div class="single-blog h-calc wow fadeInUp" data-wow-delay="0.2s">
                                <div class="position-relative">
                                    <a href="blog-details.html"> <img src="files/achievement/{{ $achiev->image }}"
                                            class="img-fluid w-100" alt="img"> </a>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-info-title">
                                        <h4 class="title text-capitalize"><a href="blog-details.html">
                                                {{ $achiev->name }} </a></h4>
                                        <p class="subtitle">{{ $achiev->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End-of Blog -->

    <!-- Contact area S t a r t-->
    <div class="volunteer-details bottom-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <h2 class="title font-700">Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24 justify-content-center">
                <div class="col-xl-3 pt-10">
                    <div class="single-terms mb-30">
                        <h5 class="title font-600">Address</h5>
                        <p class="pera"> {{ $contact->address }} </p>
                    </div>
                    <div class="single-terms mb-30">
                        <h5 class="title font-600">Contact</h5>
                        <p class="pera mb-10">Phone : {{ $contact->phone_number }} </p>
                        <p class="pera mb-10">Email : {{ $contact->email }} </p>
                        <p class="pera mb-10">Instagram : {{ $contact->instagram }}</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="send-box">
                        <iframe class="map-frame"
                            src="https://www.google.com/maps/embed/v1/place?q={{ $contact->address }}&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                            width="600" height="450" style="border: 15px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
