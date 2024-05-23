@php
    $admin_company_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>Company</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>History</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {!! nl2br($company->history) !!} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Image 1</h6>
                            <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                <img src="{{ asset('files') }}/company/{{ $company->image }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-xl">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 justify-content-end">
                        <a href="/admin/company/edit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Team</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/team/{{ $team->image }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="javascript:;">
                                        <h5> {{ $team->name }} </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {{ $team->position }}
                                    </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="/admin/team/edit/{{ $team->id }}"
                                            class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                        <a href="/admin/team/delete/{{ $team->id }}"
                                            class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="/admin/team/add">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Person </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-4">Achievements</h6>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($achievements as $achievement)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{ asset('files') }}/achievement/{{ $achievement->image }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <a href="javascript:;">
                                        <h5> {{ $achievement->name }} </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {{ $achievement->description }}
                                    </p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="/admin/achievement/edit/{{ $achievement->id }}"
                                            class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                        <a href="/admin/achievement/delete/{{ $achievement->id }}"
                                            class="btn bg-gradient-danger btn-sm mb-0">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="/admin/achievement/add">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Achievement </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
