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
                        <li class="breadcrumb-item single-list"><a href="/" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single">Event</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">event list</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- donate S t a r t -->
    <section class="donate-section top-bottom-padding">
        <div class="container">
            <div class="row gy-24">
                @foreach ($events as $event)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-donate">
                            <div class="position-relative">
                                <img class="w-100" src="files/event/{{ $event->image }}" alt="img">
                            </div>
                            <div class="donate-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="donate-info-title">
                                        <h4 class="title text-capitalize"><a href="{{ route('events.show', $event) }}">
                                                {{ $event->name }} </a></h4>
                                        <div class="subtitle indented">
                                            {!! nl2br(substr($event->description, 0, 100)) !!}...
                                        </div>
                                        <div class="flex justify-content-between mt-14 mb-20">
                                            <div class="flex gap-10">
                                                <div class="charges">
                                                    <i class="title ri-map-pin-line"></i>
                                                </div>
                                                <div class="charges">
                                                    <h4 class="title"> {{ "$event->location, " }}
                                                        {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('events.show', $event) }}" class="btn donate-btn w-100">More
                                            Details</a>
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
