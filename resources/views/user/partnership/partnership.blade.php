@php
    $collaboration_page = true;
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
                                class="single">partnership</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s"> {{ $partnership->type }} </h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->
    <!-- Privacy policy S t r t -->
    <div class="privacy-policy-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Single -->
                    <div class="single-terms mb-30">
                        <h5 class="title font-600">Description</h5>
                        <p class="pera mb-20">{!! nl2br($partnership->description) !!}</p>
                    </div>
                    <div class="single-terms mb-30">
                        <h5 class="title font-600">Benefits</h5>
                        <p class="pera mb-20">{!! nl2br($partnership->benefits) !!}</p>
                    </div>
                    <!-- Single -->
                    <div class="single-terms mb-0">
                        <h5 class="title font-600">Contact Us</h5>
                        <p class="pera mb-20 text-normal">{{ "Phone: $partnership->contact_person" }}</p>
                        <p class="pera mb-20 text-normal">{{ "Email: $partnership->contact_email" }}</p>
                    </div>
                    <div class="col-lg-10 mt-10">
                        <a href="https://wa.me/{{ $partnership->contact_person }}?text=Halo%20saya%20tertarik%20untuk%20join%20{{ $partnership->type }}"
                            class="btn btn-primary-fill">Join Our {{ $partnership->type }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of Privacy policy-->
@endsection
