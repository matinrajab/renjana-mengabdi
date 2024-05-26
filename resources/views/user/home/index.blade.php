@php
    use App\Helpers\DateFormatter;
    $home_page = true;
@endphp

<!DOCTYPE html>
<html lang="en" dir="lrt">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="These template is suitable for charity , NGO , non-profit organization , donation , church or a fundraising website.">
    <meta name="keywords"
        content="charity, causes, donate, charity foundation, charity hub, charity theme, donations, non profit, fundraiser,social, ngo, non-profit, nonprofit, organization, volunteer">
    <meta name="author" content="initTheme">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Renjana Mengabdi Indonesia">
    <meta property="og:site_name" content="donate Website">
    <meta property="og:site_name" content="Charitfix">
    <meta property="og:url" content="www.Charitfix.com">
    <meta property="og:image" content="www.Charitfix.com">
    <meta property="og:description"
        content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization">
    <meta name="twitter:title" content="Renjana Mengabdi Indonesia">
    <meta name="twitter:description"
        content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization">
    <meta name="twitter:image" content="www.Charitfix.com">
    <meta name="twitter:card" content="summary">
    <title>Renjana Mengabdi</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{ asset('user/assets') }}/images/icon/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets') }}/css/bootstrap-5.3.0.min.css">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets') }}/css/remixicon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets') }}/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets') }}/css/main-style.css">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('user/assets') }}/css/rtl.css"> -->
</head>

<body>
    <header>
        <div class="header-area-three">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                    <div class="header-left d-flex align-items-center justify-content-between">
                                        <div class="logo logo-large light-logo">
                                            <a href="index.html"><img
                                                    src="{{ asset('user/assets') }}/images/logo/logo-renjana-mengabdi.png"
                                                    style="height:80px;" alt="logo"></a>
                                        </div>
                                        <!-- Logo Mobile-->
                                        <div class="logo logo-mobile light-logo">
                                            <a href="index.html"><img
                                                    src="{{ asset('user/assets') }}/images/icon/favicon.png"
                                                    alt="img"></a>
                                        </div>
                                    </div>
                                    <div class="search-container">
                                        <input type="text" id="searchField" class="search-field"
                                            placeholder="Search...">
                                        <button id="closeSearch" class="close-search-btn"><i
                                                class="ri-close-line"></i></button>
                                    </div>
                                    <!-- Main-menu for desktop -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul class="listing" id="navigation">
                                                <li class="single-list"><a href="/" class="single">Home</a>
                                                </li>
                                                <li class="single-list"><a href="/open-volunteers" class="single">Open
                                                        Volunteer</a></li>
                                                <li class="single-list"><a href="/events" class="single">Event</a>
                                                </li>
                                                <li class="single-list"><a href="/blogs" class="single">Blog</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">Collaboration<i
                                                            class="ri-arrow-down-s-line"></i></a>
                                                    <ul class="submenu">
                                                        <li class="single-list"><a href="/partnership"
                                                                class="single">Partnership</a></li>
                                                        <li class="single-list"><a href="/sponsorship"
                                                                class="single">Sponsorship</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-list"><a href="/company" class="single">Company</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right d-flex align-items-center">
                                        <!-- Right button -->
                                        <ul class="cart">
                                            <li class="cart-list d-lg-inline-block">
                                                <a href="donation.html" class="btn-primary-fill text-uppercase">
                                                    <span class="pera">Donation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="div">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero area S t a r t-->
        <section class="hero-area-three">
            <div class="single-slider hero-padding-three">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
                            <div class="hero-caption mb-20">
                                <p class="key-title font-700 mb-20"> {{ $home->title }} </p>
                                <h1 class="title font-700" data-animation="fadeInUp" data-delay=".0s">
                                    {{ $home->subtitle }} </h1>
                                <p class="pera mx-width-780" data-animation="fadeInUp" data-delay=".2s">
                                    {{ $home->description }} </p>
                                <div class="d-flex gap-20 flex-wrap align-items-center">
                                    <a href="{{ $home->cta_url }}" class="btn-primary-fill pill-btn"
                                        data-animation="fadeInLeft" data-delay=".4s">{{ $home->cta_label }}</a>
                                </div>
                                <div class="hero-count-section flex justify-content-between">
                                    <div class="hero-count">
                                        <h4 class="title"> {{ $home->years_count }}+</h4>
                                        <p class="pera mb-0">
                                            Years of <br>
                                            Experience
                                        </p>

                                        <div class="hero-divider"></div>
                                    </div>
                                    <div class="hero-count">
                                        <h4 class="title"> {{ $home->volunteers_count }}+</h4>
                                        <p class="pera mb-0">
                                            Volunteers
                                        </p>
                                    </div>
                                    <div class="hero-count">
                                        <h4 class="title"> {{ $home->registrants_count }}+</h4>
                                        <p class="pera mb-0">
                                            Registrants
                                        </p>
                                    </div>
                                    <div class="hero-count">
                                        <h4 class="title"> {{ $home->destinations_count }}+</h4>
                                        <p class="pera mb-0">
                                            Destinations
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="d-flex gap-44 justify-content-end">
                                <div id="play-video" class="hero-image position-relative d-none d-lg-block">
                                    <img src="{{ asset('files') }}/homepage/{{ $home->image_1 }}" alt="img"
                                        class="w-100 tilt-effect" data-animation="fadeInRight" data-delay="0.2s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End-of Hero-->

        <!-- helpful area S t a r t-->
        <section class="helpful-area-three section-padding">
            <div class="container">
                <div class="row g-24">
                    <div class="col-xl-3 col-md-6 col-lg-6">
                        <div class="helpful-card wow fadeInUp" data-wow-delay="0.0s">
                            <div class="helpful-card-icon">
                                <i class="ri-book-open-line"></i>
                            </div>
                            <div class="helpful-card-caption">
                                <h4 class="caption-title">Divisi Pendidikan</h4>
                                <p class="caption-para">Berfokus untuk mengedukasi, menunjang, dan meningkatkan
                                    kualitas pendidikan warga setempat khususnya pada sekolah dasar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-6">
                        <div class="helpful-card wow fadeInUp" data-wow-delay="0.1s">
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
                        <div class="helpful-card wow fadeInUp" data-wow-delay="0.2s">
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
                        <div class="helpful-card wow fadeInUp" data-wow-delay="0.3s">
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
        <section class="urgent-area bottom-padding">
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
                                    <img class="w-100 h-100" src="files/slide_banner/{{ $banner->image }}"
                                        alt="img">
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

        <!-- About us Area S t a r t -->
        <section class="about-area question-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 my-auto">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2 class="title font-700 pb-15">About Us</h2>
                            <p class="pera-subtitle mb-15">{!! nl2br($home->about_us) !!}</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">Vision</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body"> {{ $home->vision }} </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed additional-styles" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">Mission</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <ul class="experience listing listing2"
                                        style="padding-inline:17px;padding-bottom:10px">
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
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">Values</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <ul class="experience listing listing2"
                                        style="padding-inline:17px;padding-bottom:10px">
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
                        <div class="position-relative h-100">
                            <img class="w-100 d-none d-lg-block"
                                src="{{ asset('files') }}/homepage/{{ $home->image_2 }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End-of About us Area -->

        <!-- Our event S t a r t-->
        <section class="our-event donate-section section-padding2">
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
                            <div class="single-donate">
                                <div class="position-relative">
                                    <img class="w-100" src="files/event/{{ $event->image }}" alt="img">
                                </div>
                                <div class="donate-info">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="donate-info-title">
                                            <h4 class="title text-capitalize"><a href="donation-details.html">
                                                    {{ $event->name }} </a></h4>
                                            <p class="subtitle">
                                                {!! nl2br(substr($event->description, 0, 100)) !!}...
                                            </p>
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
                                            <a href="{{ route('events.show', $event) }}"
                                                class="btn donate-btn w-100">More
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
                        @foreach ($testimonials as $testimonial)
                            <div class="single-testimonial position-relative">
                                <div class="client-info">
                                    <div class="client-details">
                                        <h3 class="name"> {{ $testimonial->name }} </h3>
                                        <p class="location"> {{ $testimonial->title }} </p>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <p class="pera">
                                        <i> {!! nl2br($testimonial->content) !!} </i>
                                    </p>
                                    <div class="position-absolute quote">
                                        <div class="rounded-btn">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End-of Testimonial -->

        <!-- Blog S t a r t -->
        <section class="blog-section-three bottom-padding">
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
                            <div class="single-blog h-calc">
                                <div class="blog-img">
                                    <a href="blog-details.html" class="img-fluid w-100 h-20">
                                        <img src="files/blog/{{ $blog->image }}" class="img-fluid w-100 h-20"
                                            alt="img">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="blog-info-title">
                                            <div class="flex mb-15 gap-16 align-items-center">
                                                <div class="user flex gap-10 align-items-center">
                                                    <i class="ri-user-line"></i>
                                                    <p class="info"> {{ "By: $blog->author" }} </p>
                                                </div>
                                                <div class="donate flex gap-10 align-items-center">
                                                    <i class="ri-calendar-check-line"></i>
                                                    <p class="info">
                                                        {{ DateFormatter::date($blog->publication_date) }}</p>
                                                </div>
                                            </div>
                                            <h4 class="title text-capitalize"><a href="blog-details.html">
                                                    {{ $blog->title }} </a></h4>
                                            <p class="subtitle">
                                                {!! nl2br(substr($blog->content, 0, 100)) !!}...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-section"><a href="{{ route('blogs.show', $blog) }}"
                                        class="read-btn">Read
                                        More</a>
                                </div>
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
    </main>

    <a href="https://wa.me/{{ $whatsappNumber }}">
        <button class="action-button">
            <i class="ri-whatsapp-line"></i>
        </button>
    </a>

    <!-- Footer S t a r t -->
    <footer>
        <div class="footer-wrapper footer-bg-one">
            <div class="container">
                <div class="footer-menu">
                    <div class="col-lg-12">
                        <div class="menu-wrapper d-flex align-items-center justify-content-between">
                            <div class="header-left d-flex align-items-center justify-content-between">
                                <!-- Logo-->
                                <div class="logo">
                                    <a href="index.html"><img
                                            src="{{ asset('user/assets') }}/images/logo/logo-renjana-mengabdi.png"
                                            style="height:80px;" alt="logo"></a>
                                </div>
                            </div>
                            <!-- Footer-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="listing" id="navigation2">
                                        <div class="single-list"><a href="index.html" class="single">Home</a>
                                        </div>
                                        <div class="single-list"><a href="donation.html" class="single">Donation</a>
                                        </div>
                                        <div class="single-list"><a href="about.html" class="single">About</a></div>
                                        <div class="single-list"><a href="blog.html" class="single">Blog</a></div>
                                        <div class="single-list"><a href="contact-us.html" class="single">Contact</a>
                                        </div>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Right button -->
                            <ul class="cart">
                                <div class="cart-list"><a href="donate-payment.html" class="donate-btn">Donate</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="footer-line">
                <div class="footer-imp-link row g-4 justify-content-between">
                    <div class="col-xl-2 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Explore Links</h4>
                            <ul class="imp-link">
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">About Company</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">Latest Projects</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">Latest Blog</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">Our Testimonials</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">Our Mission</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Get Support</h4>
                            <ul class="imp-link">
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">About</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">How it Works</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">Knowledge Hub</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">Success Stories</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="javascript:void(0)">Contact</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5">
                        <div class="footer-link">
                            <h4 class="title">Get Support</h4>
                            <ul class="imp-link">
                                <div class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-mail-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">donation@gmail.com</a>
                                    </div>
                                </div>
                                <div class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">(+88) 111-222-333</a>
                                    </div>
                                </div>
                                <div class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-map-pin-2-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">Tropical Cyclone, Volcano</a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Projects</h4>
                            <ul class="imp-link">
                                <div class="single-list">
                                    <div class="d-flex gap-20 mb-20 align-items-center">
                                        <div class="project-img">
                                            <a href="donation-details.html">
                                                <img src="{{ asset('user/assets') }}/images/gallery/project-1.png"
                                                    alt="image">
                                            </a>
                                        </div>

                                        <div class="project-info">
                                            <p class="project-date">12.Oct.2023</p>
                                            <h4 class="project-title"><a href="donation-details.html">18 Best Charity
                                                    Marketing Champions</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-list">
                                    <div class="d-flex gap-20">
                                        <div class="project-img">
                                            <a href="donation-details.html">
                                                <img src="{{ asset('user/assets') }}/images/gallery/project-2.png"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="project-info">
                                            <p class="project-date">20.Oct.2023</p>
                                            <h4 class="project-title"><a href="donation-details.html">Charity starts
                                                    from home. You Can't Even
                                                    Help,</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="footer-line">
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copy-right text-center">
                                    <p class="pera">Copyright © 2023 initTheme. All rights reserved.</p>
                                    <div class="footer-social-link">
                                        <ul class="listing">
                                            <div class="single-list">
                                                <a class="single" href="#"><i class="ri-facebook-fill"></i></a>
                                            </div>
                                            <div class="single-list">
                                                <a class="single" href="#"><i class="ri-youtube-fill"></i></a>
                                            </div>
                                            <div class="single-list">
                                                <a class="single" href="#"><i
                                                        class="ri-instagram-line"></i></a>
                                            </div>
                                            <div class="single-list">
                                                <a class="single" href="#"><i class="ri-linkedin-fill"></i></a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End-of Footer -->
    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an overlay element -->
    <div class="overlay"></div>
    <!-- jquery-->
    <script src="{{ asset('user/assets') }}/js/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('user/assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('user/assets') }}/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="{{ asset('user/assets') }}/js/plugin.js"></script>
    <!-- Main js-->
    <script src="{{ asset('user/assets') }}/js/main.js"></script>
    <script>
        $(document).ready(function() {
            const testimonials = @json($testimonials);

            const testimonialImages = testimonials.map((testimonial, index) => {
                return `<div class="slick-custom-dot">
                        <div class="testimonial-img-horizontal">
                            <img class="w-100" src="files/testimonial/${testimonial.profile_picture}" alt="image">
                        </div>
                    </div>`;
            });

            $(".testimonial-slider").slick({
                dots: true,
                infinite: true,
                autoplaySpeed: 400,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="ri-arrow-left-line"></i></button>',
                nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="ri-arrow-right-line"></i></button>',
                customPaging: function(slider, i) {
                    return testimonialImages[i];
                },
            });
        });
    </script>
</body>

</html>
