@php
    use App\Helpers\DateFormatter;
    $volunteer_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="/" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single">open volunteer</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">open volunteer</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- donate S t a r t -->
    <section class="blog-section-two top-bottom-padding">
        <div class="container">
            <div class="row gy-24">
                @foreach ($openVolunteers as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-blog h-calc wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="blog-img position-relative">
                                <a href="{{ route('open-volunteers.show', $item) }}"> <img
                                        src="files/volunteer/{{ $item->image }}" class="img-fluid w-100" alt="img">
                                </a>
                                <div class="blog-badge">
                                    <p class="subtitle">
                                        {{ $item->volunteerType->name }}
                                    </p>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="blog-info-title">
                                        <div class="flex mb-15 gap-16 align-items-center">
                                            <div class="user flex gap-10 align-items-center">
                                                <i class="ri-map-pin-line"></i>
                                                <p class="info"> {{ $item->location }} </p>
                                            </div>
                                            <div class="donate flex gap-10 align-items-center">
                                                <i class="ri-calendar-check-line"></i>
                                                <p class="info">
                                                    {{ DateFormatter::startToEnd($item->start_date, $item->end_date) }}
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="title text-capitalize"><a
                                                href="{{ route('open-volunteers.show', $item) }}">
                                                {{ $item->program_name }} </a></h4>
                                        <div class="subtitle indented">
                                            {!! nl2br(substr($item->description, 0, 100)) !!}...
                                        </div>
                                        <a href="{{ route('open-volunteers.show', $item) }}" class="imp-link">
                                            More Details <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End-of donate -->
@endsection
