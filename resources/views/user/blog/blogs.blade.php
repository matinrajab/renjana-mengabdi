@php
    use App\Helpers\DateFormatter;
    $blog_page = true;
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
                                class="single">Blog </a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Latest blog</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Blog S t a r t -->
    <section class="blog-section-three top-bottom-padding">
        <div class="container">
            <div class="row gy-24">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-blog h-calc">
                            <div class="blog-img">
                                <a href="{{ route('blogs.show', $blog) }}" class="img-fluid w-100 h-20">
                                    <img src="files/blog/{{ $blog->image }}" class="img-fluid w-100 h-20" alt="img">
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
                                        <h4 class="title text-capitalize"><a href="{{ route('blogs.show', $blog) }}">
                                                {{ $blog->title }} </a></h4>
                                        <div class="subtitle indented">
                                            {!! nl2br(substr($blog->content, 0, 100)) !!}...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-section"><a href="{{ route('blogs.show', $blog) }}" class="read-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End-of Blog -->
@endsection
