@php
    $admin_open_volunteer_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Open Volunteer Details</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Program Name</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Category</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Description</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Alias tempore inventore ipsum a saepe aliquid animi aliquam? Quos,
                                laboriosam
                                debitis!</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Location</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Start Date</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>End Date</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Requirement</h6>
                            <ul>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Application Proccess</h6>
                            <ul>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                                <li>
                                    <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Application Deadline</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Image</h6>
                            <div class="col-md-7 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('admin/assets') }}/img/home-decor-1.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 justify-content-end">
                        <a href="/admin/open-volunteer/edit/1" class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                        <a href="#" class="btn bg-gradient-danger btn-md mt-4 mb-4">delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
