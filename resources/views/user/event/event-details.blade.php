@php
    use App\Helpers\DateFormatter;
    $event_page = true;
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
                                class="single">Event</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s"> event details </h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Donation Payment S t a r t -->
    <div class="donation-payment section-padding">
        <div class="container">
            <div class="row g-24 justify-content-between">
                <div class="col-lg-7">
                    <!-- Payment -->
                    <div class="card-style box-shadow border-0">
                        <div class="small-tittle mb-50">
                            <h2 class="title text-capitalize font-600 position-relative">Event Description</h2>
                        </div>
                        <div class="donate-content">
                            <p class="pera">{!! nl2br($event->description) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="blog-section-two">
                        <div class="single-blog h-calc">
                            <div class="blog-img position-relative">
                                <img src="{{ asset('files') }}/event/{{ $event->image }}" class="img-fluid w-100"
                                    alt="img">
                                <div class="blog-img-overlay-text"></div>
                            </div>
                            <!-- Payment Details -->
                            <div class="paymentDetails card-style box-shadow border-0 mb-24">
                                <div class="blog-info">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="blog-info-title">
                                            <h4 class="title text-capitalize">Event :</h4>
                                            <p class="subtitle">{{ $event->name }}</p>
                                            <div class="priceListing">
                                                <ul class="listing">
                                                    <li class="listItem">
                                                        <p class="leftCap font-600">Location & Date</p>
                                                    </li>
                                                    <li class="listItem">
                                                        <p class="subtitle">{{ "$event->location, " }}
                                                            {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="{{ $event->guide_book_link }}" class="btn donate-btn w-100 mt-10">Guide
                                                Book</a>
                                            <a href="{{ $event->fully_special_funded_link }}"
                                                class="btn donate-btn w-100 mt-10">Fully & Special Funded</a>
                                            <a href="{{ $event->self_funded_link }}" class="btn donate-btn w-100 mt-10">Self
                                                Funded
                                                Registration</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-of Donation Payment -->

    <!-- Blog S t a r t -->
    <section class="blog-section-three bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">gallery</span>
                        <h2 class="title font-700">The Best Moments</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                @foreach ($event->galleries as $gallery)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-blog h-calc">
                            <div class="blog-img">
                                <img src="{{ asset('files') }}/gallery/{{ $gallery->image }}" class="img-fluid w-100"
                                    alt="img">
                            </div>
                            <div class="blog-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="blog-info-title">
                                        <h4 class="title text-capitalize">{{ $gallery->title }}</h4>
                                        <p class="subtitle">{{ $gallery->caption }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End-of Blog -->
@endsection
