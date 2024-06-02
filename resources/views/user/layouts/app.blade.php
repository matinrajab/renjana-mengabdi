<!DOCTYPE html>
<html lang="en" dir="lrt">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Renjana Mengabdi Indonesia">
    <meta name="twitter:title" content="Renjana Mengabdi Indonesia">
    <meta name="twitter:card" content="summary">
    <title>@yield('title', 'Renjana Mengabdi')</title>
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
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="header-left d-flex align-items-center justify-content-between">
                                    <!-- Logo-->
                                    <div class="logo logo-large light-logo">
                                        <a href="/"><img
                                                src="{{ asset('user/assets') }}/images/logo/logo-renjana-mengabdi.png"
                                                style="height:80px;" alt="logo"></a>
                                    </div>
                                    <!-- Logo Mobile-->
                                    <div class="logo logo-mobile light-logo">
                                        <a href="/"><img src="{{ asset('user/assets') }}/images/icon/favicon.png"
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
                                            <li class="single-list"><a href="{{ route('homepage.index') }}"
                                                    class="single {{ isset($home_page) ? 'active' : '' }}">Home</a>
                                            </li>
                                            <li class="single-list"><a href="{{ route('open-volunteers.index') }}"
                                                    class="single {{ isset($volunteer_page) ? 'active' : '' }}">Volunteer
                                                    Project</a></li>
                                            <li class="single-list"><a href="{{ route('events.index') }}"
                                                    class="single {{ isset($event_page) ? 'active' : '' }}">Event</a>
                                            </li>
                                            <li class="single-list"><a href="{{ route('blogs.index') }}"
                                                    class="single {{ isset($blog_page) ? 'active' : '' }}">Blog</a>
                                            </li>
                                            <li class="single-list">
                                                <a href="javascript:void(0)"
                                                    class="single {{ isset($collaboration_page) ? 'active' : '' }}">Collaboration<i
                                                        class="ri-arrow-down-s-line"></i></a>
                                                <ul class="submenu">
                                                    <li class="single-list"><a href="/partnership"
                                                            class="single">Partnership</a></li>
                                                    <li class="single-list"><a href="/sponsorship"
                                                            class="single">Sponsorship</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-list"><a href="/company"
                                                    class="single {{ isset($company_page) ? 'active' : '' }}">About
                                                    Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-right">
                                    <div class="cart">
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
        @yield('content')
    </main>

    <a href="https://wa.me/{{ $contact->phone_number }}">
        <button class="action-button">
            <i class="ri-whatsapp-line"></i>
        </button>
    </a>

    <footer>
        <div class="footer-wrapper footer-bg-one">
            <div class="container">
                <hr class="footer-line">
                <div class="footer-imp-link row g-4 justify-content-center">
                    <div class="col-xl-3 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Explore Links</h4>
                            <ul class="imp-link">
                                <div class="single-list">
                                    <a class="single" href="/">Home</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="/open-volunteers">Volunteer Project</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="/events">Latest Events</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="/blogs">Latest Blogs</a>
                                </div>
                                <div class="single-list">
                                    <a class="single" href="/company">About Us</a>
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
                                        <a class="single" href="javascript:void(0)"> {{ $contact->email }} </a>
                                    </div>
                                </div>
                                <div class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)"> {{ $contact->phone_number }}
                                        </a>
                                    </div>
                                </div>
                                <div class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-instagram-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)"> {{ $contact->instagram }} </a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Volunteer Project</h4>
                            <ul class="imp-link">
                                @foreach ($lastVolunteers as $item)
                                    <div class="single-list">
                                        <div class="d-flex gap-20 mb-20 align-items-center">
                                            <div class="project-img">
                                                <a href="{{ route('open-volunteers.show', $item) }}">
                                                    <img src="{{ asset('files') }}/volunteer/{{ $item->image }}"
                                                        style="max-width: 109px" alt="image">
                                                </a>
                                            </div>

                                            <div class="project-info">
                                                <p class="project-date">
                                                    {{ App\Helpers\DateFormatter::date($item->start_date) }}</p>
                                                <h4 class="project-title"><a
                                                        href="{{ route('open-volunteers.show', $item) }}">
                                                        {{ $item->program_name }} </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                <div class="footer-copy-right justify-content-center text-center">
                                    <p class="pera">
                                        Copyright ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                        <a href="/" class="font-weight-bold" target="_blank">Renjana
                                            Mengabdi</a>
                                        Development By
                                        <a href="https://punggawastudio.com/" class="font-weight-bold"
                                            target="_blank">Punggawa
                                            Studio</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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

    @stack('scriptjs')
</body>

</html>
