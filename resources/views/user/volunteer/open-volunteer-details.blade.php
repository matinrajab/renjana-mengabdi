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
                        <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single">Volunteer</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Open Volunteer Details</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- volunteer details area S t a r t-->
    <section class="volunteer-details top-bottom-padding2">
        <div class="container">
            <div class="row gy-24">
                <div class="col-xl-4 col-md-5 col-lg-5">
                    <div class="volunteer-img">
                        <img src="{{ asset('files') }}/volunteer/{{ $openVolunteer->image }}" alt="image">
                    </div>
                </div>
                <div class="col-xl-8 col-md-7 col-lg-7">
                    <div class="volunteer-info-card">
                        <div class="volunteer-info">
                            <div class="naming-section">
                                <h3 class="title"> {{ $openVolunteer->program_name }} </h3>
                                <span class="subtitle mr-20">Category : {{ $openVolunteer->volunteerType->name }}
                                </span>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <h4 class="title">Description</h4>
                        <div class="pera indented">{!! nl2br($openVolunteer->description) !!}
                        </div>
                        <h4 class="title mt-28">Location & Date</h4>
                        <div class="contact-list">
                            <div class="contact-icon-list">
                                <div class="single-icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <p class="title">{{ $openVolunteer->location }}</p>
                            </div>
                            <div class="contact-icon-list">
                                <div class="single-icon">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                                <p class="title">
                                    {{ DateFormatter::startToEnd($openVolunteer->start_date, $openVolunteer->end_date) }}
                                </p>
                            </div>
                        </div>
                        <br>
                        <h4 class="title">Application Deadline</h4>
                        <div class="contact-list">
                            <div class="contact-icon-list">
                                <div class="single-icon">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                                <p class="title"> {{ DateFormatter::date($openVolunteer->application_deadline) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="education-section">
                        <h4 class="title">Requirements</h4>
                        <div class="education-box indented">
                            {!! nl2br($openVolunteer->requirements) !!}
                        </div>
                    </div>
                    <div class="education-section">
                        <h4 class="title">Application Process</h4>
                        <div class="education-box indented">
                            {!! nl2br($openVolunteer->application_process) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of volunteer details-->

    <!-- Gallery S t a r t -->
    <div class="gallery-area">
        <div class="gallery-slider d-flex">
            <div class="gallery-img">
                <img src="{{ asset('user/assets') }}/images/gallery/gallery-1.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="{{ asset('user/assets') }}/images/gallery/gallery-2.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="{{ asset('user/assets') }}/images/gallery/gallery-3.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="{{ asset('user/assets') }}/images/gallery/gallery-4.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="{{ asset('user/assets') }}/images/gallery/gallery-2.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="{{ asset('user/assets') }}/images/gallery/gallery-3.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="{{ asset('user/assets') }}/images/gallery/gallery-1.png" alt="img">
            </div>
        </div>
    </div>
    <!-- End-of Gallery -->
@endsection
