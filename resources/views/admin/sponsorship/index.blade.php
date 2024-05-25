@php
    $admin_sponsorship_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h5>{{ $sponsorship->type }}</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Description</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {!! nl2br($sponsorship->description) !!} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Benefits</h6>
                            <p class="text-gradient text-dark mb-2 text-sm">{!! nl2br($sponsorship->benefits) !!}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Phone</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $sponsorship->contact_person }} </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <h6>Email</h6>
                            <p class="text-gradient text-dark mb-2 text-sm"> {{ $sponsorship->contact_email }} </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="/admin/sponsorship/edit/{{ $sponsorship->id }}"
                            class="btn bg-gradient-dark btn-md mt-4 mb-4">Edit {{ $sponsorship->type }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
