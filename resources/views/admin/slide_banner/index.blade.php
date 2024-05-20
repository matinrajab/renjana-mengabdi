@php
    $admin_slide_banner_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Slide Banner</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="{{ asset('admin/assets') }}/img/home-decor-1.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <a href="javascript:;">
                                    <h5>Volunteer 2 Partial Funded</h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    As Uber works through a huge amount of internal management turmoil.
                                </p>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="/admin/slide-banner/edit/1"
                                        class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                    <a href="#" class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="{{ asset('admin/assets') }}/img/home-decor-1.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <a href="javascript:;">
                                    <h5>Volunteer 2 Partial Funded</h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    As Uber works through a huge amount of internal management turmoil.
                                </p>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="/admin/slide-banner/edit/1"
                                        class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                    <a href="#" class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="{{ asset('admin/assets') }}/img/home-decor-1.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <a href="javascript:;">
                                    <h5>Volunteer 2 Partial Funded</h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    As Uber works through a huge amount of internal management turmoil.
                                </p>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="/admin/slide-banner/edit/1"
                                        class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                    <a href="#" class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="/admin/slide-banner/add">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Banner </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
