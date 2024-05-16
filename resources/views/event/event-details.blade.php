@php
    use App\Helpers\DateFormatter;
@endphp

<!DOCTYPE html>
<html lang="en" dir="lrt">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="These template is suitable for charity , NGO , non-profit organization , donation , church or a fundraising website.">
    <meta name="keywords"
        content="charity, causes, donate, charity foundation, charity hub, charity theme, donations, non profit, fundraiser,social, ngo, non-profit, nonprofit, organization, volunteer">
    <meta name="author" content="initTheme">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Charity & Donation HTML Template">
    <meta property="og:site_name" content="donate Website">
    <meta property="og:site_name" content="Charitfix">
    <meta property="og:url" content="www.Charitfix.com">
    <meta property="og:image" content="www.Charitfix.com">
    <meta property="og:description"
        content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization">
    <meta name="twitter:title" content="Charity & Donation HTML Template">
    <meta name="twitter:description"
        content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization">
    <meta name="twitter:image" content="www.Charitfix.com">
    <meta name="twitter:card" content="summary">
    <title>Charitfix - Charity & Donation HTML Template</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{ asset('assets') }}/images/icon/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap-5.3.0.min.css">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/remixicon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/main-style.css">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/rtl.css"> -->
</head>

<body>
    <header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="header-left d-flex align-items-center justify-content-between">
                                    <!-- Logo-->
                                    <div class="logo logo-large light-logo">
                                        <a href="index.html"><img
                                                src="{{ asset('assets') }}/images/logo/logo-renjana-mengabdi.png"
                                                style="height:80px;" alt="logo"></a>
                                    </div>
                                    <!-- Logo Mobile-->
                                    <div class="logo logo-mobile light-logo">
                                        <a href="index.html"><img src="{{ asset('assets') }}/images/icon/favicon.png"
                                                alt="img"></a>
                                    </div>
                                </div>

                                <div class="search-container">
                                    <input type="text" id="searchField" class="search-field" placeholder="Search...">
                                    <button id="closeSearch" class="close-search-btn"><i
                                            class="ri-close-line"></i></button>
                                </div>

                                <!-- Main-menu for desktop -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul class="listing" id="navigation">
                                            <li class="single-list">
                                                <a href="javascript:void(0)" class="single">Home <i
                                                        class="ri-arrow-down-s-line"></i></a>
                                                <ul class="submenu">
                                                    <li class="single-list"><a href="index.html" class="single">Home
                                                            01</a></li>
                                                    <li class="single-list"><a href="index-two.html" class="single">Home
                                                            02</a></li>
                                                    <li class="single-list"><a href="index-three.html"
                                                            class="single">Home 03</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-list"><a href="about.html" class="single">About</a></li>
                                            <li class="single-list"><a href="donation.html"
                                                    class="single active">Event</a></li>
                                            <li class="single-list"><a href="blog.html" class="single">Blog</a></li>
                                            <li class="single-list">
                                                <a href="javascript:void(0)" class="single ">Pages <i
                                                        class="ri-arrow-down-s-line"></i></a>
                                                <ul class="submenu">
                                                    <li class="single-list"><a href="volunteer.html"
                                                            class="single">Volunteer</a></li>
                                                    <li class="single-list"><a href="donate-payment.html"
                                                            class="single">donate pay</a></li>
                                                    <li class="single-list"><a href="blog-details.html"
                                                            class="single">Blog Details</a></li>
                                                    <li class="single-list"><a href="event-details.html"
                                                            class="single">event Details</a></li>
                                                    <li class="single-list"><a href="donation-details.html"
                                                            class="single">donation Details</a>
                                                    </li>
                                                    <li class="single-list"><a href="volunteer-details.html"
                                                            class="single">Volunteer Details</a>
                                                    </li>
                                                    <li class="single-list">
                                                        <a href="javascript:void(0)" class="single">Login<i
                                                                class="ri-arrow-right-s-line"></i></a>
                                                        <ul class="submenu">
                                                            <li class="single-list"><a href="login.html"
                                                                    class="single">Login</a></li>
                                                            <li class="single-list"><a href="register.html"
                                                                    class="single">Registration</a></li>
                                                            <li class="single-list"><a href="forgot-pass.html"
                                                                    class="single">Forgot Password</a></li>
                                                            <li class="single-list"><a href="verification.html"
                                                                    class="single">Verification</a></li>
                                                            <li class="single-list"><a href="new-password.html"
                                                                    class="single">New Password</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="single-list"><a href="faq.html"
                                                            class="single">FAQs</a></li>
                                                    <li class="single-list"><a href="privacy-policy.html"
                                                            class="single">privacy policy</a></li>
                                                    <li class="single-list"><a href="terms-condition.html"
                                                            class="single">terms-condition</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-list"><a href="contact-us.html"
                                                    class="single">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-right">
                                    <div class="cart">
                                        <!-- search button -->
                                        <a href="javascript:void(0)" class="rounded-btn search-bar"><i
                                                class="ri-search-line"></i></a>
                                        <a href="login.html" class="btn-primary-fill pill-btn">Log in</a>
                                    </div>
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
    </header>
    <main>
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
                                    <a href="blog-details.html"> <img
                                            src="{{ asset('files') }}/event/{{ $event->image }}"
                                            class="img-fluid w-100" alt="img"> </a>
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
                                    <img src="{{ asset('files') }}/gallery/{{ $gallery->image }}"
                                        class="img-fluid w-100" alt="img">
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

    </main>
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
                                            src="{{ asset('assets') }}/images/logo/logo-renjana-mengabdi.png"
                                            style="height:80px;" alt="logo"></a>
                                </div>
                            </div>
                            <!-- Footer-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="listing" id="navigation2">
                                        <li class="single-list"><a href="index.html" class="single">Home</a></li>
                                        <li class="single-list"><a href="donation.html" class="single">Event</a>
                                        </li>
                                        <li class="single-list"><a href="about.html" class="single">About</a></li>
                                        <li class="single-list"><a href="blog.html" class="single">Blog</a></li>
                                        <li class="single-list"><a href="contact-us.html" class="single">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Right button -->
                            <ul class="cart">
                                <li class="cart-list"><a href="donate-payment.html" class="donate-btn">Donate</a>
                                </li>
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
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">About Company</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Latest Projects</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Latest Blog</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Our Testimonials</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Our Mission</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Get Support</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">About</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">How it Works</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Knowledge Hub</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Success Stories</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5">
                        <div class="footer-link">
                            <h4 class="title">Get Support</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-mail-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">donation@gmail.com</a>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">(+88) 111-222-333</a>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-map-pin-2-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">Tropical Cyclone, Volcano</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Projects</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <div class="d-flex gap-20 mb-20 align-items-center">
                                        <div class="project-img">
                                            <a href="donation-details.html">
                                                <img src="{{ asset('assets') }}/images/gallery/project-1.png"
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
                                </li>
                                <li class="single-list">
                                    <div class="d-flex gap-20">
                                        <div class="project-img">
                                            <a href="donation-details.html">
                                                <img src="{{ asset('assets') }}/images/gallery/project-2.png"
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
                                </li>
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
                                            <li class="single-list">
                                                <a class="single" href="#"><i class="ri-facebook-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href="#"><i class="ri-youtube-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href="#"><i
                                                        class="ri-instagram-line"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href="#"><i class="ri-linkedin-fill"></i></a>
                                            </li>
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
    <script src="{{ asset('assets') }}/js/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="{{ asset('assets') }}/js/plugin.js"></script>
    <!-- Main js-->
    <script src="{{ asset('assets') }}/js/main.js"></script>
</body>

</html>
