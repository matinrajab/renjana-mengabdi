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
                                <a href="blog-details.html"> <img src="files/volunteer/{{ $item->image }}"
                                        class="img-fluid w-100" alt="img"> </a>
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
                                        <h4 class="title text-capitalize"><a href="blog-details.html">
                                                {{ $item->program_name }} </a></h4>
                                        <p class="subtitle">
                                            {{ substr($item->description, 0, 100) }}...
                                        </p>
                                        <a href="open-volunteers/{{ $item->id }}" class="imp-link">
                                            More Details <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination">
                            <li class="page-item" aria-current="page"><span class="page-link active">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                            <li class="page-item">
                                <a class="page-link next" href="javascript:void(0)" rel="next" aria-label="Next »"><i
                                        class="ri-arrow-right-line"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- End-of donate -->

    <!-- Gallery S t a r t -->
    <div class="gallery-area">
        <div class="gallery-slider d-flex">
            <div class="gallery-img">
                <img src="user/assets/images/gallery/gallery-1.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="user/assets/images/gallery/gallery-2.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="user/assets/images/gallery/gallery-3.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="user/assets/images/gallery/gallery-4.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="user/assets/images/gallery/gallery-2.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="user/assets/images/gallery/gallery-3.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="user/assets/images/gallery/gallery-1.png" alt="img">
            </div>
        </div>
    </div>
    <!-- End-of Gallery -->
@endsection
