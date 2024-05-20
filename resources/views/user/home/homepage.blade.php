@php
    use App\Helpers\DateFormatter;
    $home_page = true;
@endphp

@extends('user.layouts.app')

@section('content')
    <!-- Hero area S t a r t-->
    <section class="hero-area">
        <div class="single-slider hero-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
                        <div class="hero-caption-one mb-20">
                            <h1 class="title font-700 wow fadeInUp" data-wow-delay="0.1s"> {{ $home->title }}
                            </h1>
                            <p class="pera wow fadeInUp" data-wow-delay="0.3s"> {{ $home->subtitle }} </p>
                            <div class="d-flex gap-20 flex-wrap">
                                <a href={{ $home->cta_url }} class="btn-primary-fill hero-btn wow fadeInLeft"
                                    data-wow-delay="0.4s"> {{ $home->cta_label }} </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="d-flex gap-44">
                            <div class="hero-image position-relative d-none d-lg-block">
                                <img src="user/assets/images/hero/hero-1.png" alt="img"
                                    class="w-100 tilt-effect wow fadeInUp" data-wow-delay="0.1s">
                            </div>
                            <div class="hero-count-section flex flex-column gap-60">
                                <div class="hero-count wow fadeInUp" data-wow-delay="0.0s">
                                    <h4 class="title">12+</h4>
                                    <p class="pera">
                                        Years of <br>
                                        Experience
                                    </p>
                                </div>
                                <div class="hero-count wow fadeInUp" data-wow-delay="0.2s">
                                    <h4 class="title">140+</h4>
                                    <p class="pera">
                                        Thousands <br>
                                        volunteers
                                    </p>
                                </div>
                                <div class="hero-count  wow fadeInUp" data-wow-delay="0.3s">
                                    <h4 class="title">500+</h4>
                                    <p class="pera">
                                        Worid wide <br>
                                        Offices
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Hero-->

    <!-- helpful area S t a r t-->
    <section class="helpful-area">
        <div class="container">
            <div class="row gy-24 justify-content-center">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc  wow fadeInLeft" data-wow-delay="0.0s">
                        <div class="helpful-card-icon">
                            <i class="ri-graduation-cap-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Divisi Pendidikan</h4>
                            <p class="caption-para">Berfokus untuk mengedukasi, menunjang, dan meningkatkan
                                kualitas pendidikan warga setempat khususnya pada sekolah dasar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc  wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="helpful-card-icon">
                            <i class="ri-heart-pulse-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Divisi Kesehatan</h4>
                            <p class="caption-para">Berfokus pada pemeriksaan, pengedukasian, dan perbaikan
                                kesehatan masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc  wow fadeInRight" data-wow-delay="0.2s">
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Divisi Ekonomi Pariwisata</h4>
                            <p class="caption-para">Berfokus pada pendampingan dan peningkatan pada kemampuan para
                                pelaku UMKM.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc wow fadeInRight" data-wow-delay="0.0s">
                        <div class="helpful-card-icon">
                            <i class="ri-leaf-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Divisi Lingkungan</h4>
                            <p class="caption-para">Berfokus untuk menciptakan sebuah gerakan yang berdampak pada
                                lingkungan dan kehidupan sosial masyarakat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of helpful-->

    <!-- gallery Area S t a r t -->
    <section class="urgent-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">In urgent cases</span>
                        <h2 class="title font-700">The best way is to find yourself</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-8 col-lg-8 p-0 urgent-area-slide xs-p-12">
                    @foreach ($banners as $banner)
                        <!-- Single Slider-->
                        <div class="image-container position-relative h-100">
                            <a href={{ $banner->link }}>
                                <img class="w-100 h-100" src="files/slide_banner/{{ $banner->image }}" alt="img">
                                <div class="image-overlay-text">
                                    <div class="flex gap-20 mb-10">
                                        <div class="map flex gap-10">
                                            <p class="pera"> {{ $banner->title }} </p>
                                        </div>
                                    </div>
                                    <div class="overlay-title">
                                        <h4 class="max-w-600" style="color: white">
                                            {{ $banner->subtitle }}
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End-of gallery area -->

    <!-- Any Question Area S t a r t -->
    <section class="question-area bottom-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-50">
                        <h2 class="title font-700">About Us</h2>
                        <p class="pera">{!! nl2br($home->description) !!}
                        </p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Vision</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"> {{ $home->vision }} </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed additional-styles" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">Mission</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <ul class="experience listing listing2" style="padding-inline:17px;padding-bottom:10px">
                                    @foreach ($missions as $mission)
                                        <li class="single-list mb-8">
                                            <i class="ri-check-line"></i>
                                            <div class="pera">{{ $mission->content }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed additional-styles" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">Values</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <ul class="experience listing listing2" style="padding-inline:17px;padding-bottom:10px">
                                    @foreach ($values as $value)
                                        <li class="single-list mb-8">
                                            <i class="ri-check-line"></i>
                                            <div class="pera"> {{ $value->content }} </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="w-100 d-none d-lg-block tilt-effect" src="user/assets/images/gallery/que.png"
                        alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Question Area -->

    <!-- Our event S t a r t-->
    <section class="our-event bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">Our event</span>
                        <h2 class="title font-700">Our Latest Events</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                @foreach ($events as $event)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.0s">
                            <div class="event-img position-relative">
                                <a href="events/{{ $event->id }}"> <img src="files/event/{{ $event->image }}"
                                        class="img-fluid w-100" alt="img"> </a>
                            </div>
                            <div class="event-info">
                                <div class="d-flex justify-content-between align-items-center gap-6">
                                    <div class="event-info-title">
                                        <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                                            <div class="date flex gap-12 align-items-center">
                                                <i class="ri-calendar-check-line"></i>
                                                <p class="info">
                                                    {{ DateFormatter::startToEnd($event->start_date, $event->end_date) }}
                                                </p>
                                            </div>
                                            <div class="map flex gap-12 align-items-center">
                                                <i class="ri-map-pin-line"></i>
                                                <p class="info"> {{ $event->location }} </p>
                                            </div>
                                        </div>
                                        <h4><a class="title text-capitalize" href="events/{{ $event->id }}">
                                                {{ $event->name }} </a></h4>
                                    </div>
                                    <a href="events/{{ $event->id }}" class="btn-arrow"><i
                                            class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End-of All Product -->

    <!-- Testimonial S t a r t-->
    <section class="testimonial-section bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">Testimonials</span>
                        <h2 class="title font-700">What People Say</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-24">
                <div class="col-lg-10 col-12 testimonial-slider">
                    <div class="single-testimonial position-relative">
                        <div class="client-info">
                            <div class="client-details">
                                <h3 class="name">Robart Jonson</h3>
                                <p class="location">United , Canada</p>
                            </div>
                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                        <div class="position-relative">
                            <p class="pera">
                                <i>These questions are used to provoke thought and discussion. They can be used to
                                    challenge the other
                                    person's assumptions, such as "Do you really think that's true?", or to get them
                                    to think about a
                                    different perspective, such as "What if we tried it this way? The specific
                                    questions to ask may vary
                                    depending on the context and the information you are seeking.</i>
                            </p>
                            <div class="position-absolute quote">
                                <div class="rounded-btn">
                                    <i class="ri-double-quotes-r"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial position-relative">
                        <div class="client-info">
                            <div class="client-details">
                                <h3 class="name">Adam John</h3>
                                <p class="location">United , UAE</p>
                            </div>

                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                        <div class="position-relative">
                            <p class="pera pb-80">
                                <i>These questions are used to provoke thought and discussion. They can be used to
                                    challenge the other
                                    person's assumptions, such as "Do you really think that's true?", or to get them
                                    to think about a
                                    different perspective, such as "What if we tried it this way? The specific
                                    questions to ask may vary
                                    depending on the context and the information you are seeking.</i>
                            </p>
                            <div class="position-absolute quote">
                                <div class="rounded-btn">
                                    <i class="ri-double-quotes-r"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial position-relative">
                        <div class="client-info">
                            <div class="client-details">
                                <h3 class="name">John Doe</h3>
                                <p class="location">Mexico, USA</p>
                            </div>

                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                        <div class="position-relative">
                            <p class="pera pb-80">
                                <i>These questions are used to provoke thought and discussion. They can be used to
                                    challenge the other
                                    person's assumptions, such as "Do you really think that's true?", or to get them
                                    to think about a
                                    different perspective, such as "What if we tried it this way? The specific
                                    questions to ask may vary
                                    depending on the context and the information you are seeking.</i>
                            </p>
                            <div class="position-absolute quote">
                                <div class="rounded-btn">
                                    <i class="ri-double-quotes-r"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Testimonial -->

    <!-- Blog S t a r t -->
    <section class="blog-section bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">Blog</span>
                        <h2 class="title font-700">Our Blog & Feeds</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                            <a href="blogs/{{ $blog->id }}">
                                <div class="position-relative">
                                    <img src="files/blog/{{ $blog->image }}" class="img-fluid w-100" alt="img">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-info-title">
                                        <div class="flex gap-16 align-items-center">
                                            <div class="user flex gap-10 align-items-center">
                                                <i class="ri-user-line"></i>
                                                <p class="info">By: {{ $blog->author }}</p>
                                            </div>
                                            <div class="donate flex gap-10 align-items-center">
                                                <i class="ri-calendar-check-line"></i>
                                                <p class="info">
                                                    {{ DateFormatter::date($blog->publication_date) }}
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="title text-capitalize">
                                            {{ $blog->title }} </h4>
                                        <p class="subtitle">{!! nl2br(substr($blog->content, 0, 100)) !!}...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End-of Blog -->

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
