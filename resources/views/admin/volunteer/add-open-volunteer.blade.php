@php
    $admin_open_volunteer_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Add Open Volunteer</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="/user-profile" method="POST" role="form text-left">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="program_name" class="form-control-label">Program Name</label>
                                <input class="form-control" type="text" placeholder="Program Name" id="program_name"
                                    name="program_name" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="program_type" class="form-control-label">Category</label>
                                <select id="program_type" name="program_type" class="form-select">
                                    <option>Basis Data</option>
                                    <option selected>Jaringan</option>
                                    <option>Pemrograman Web</option>
                                    <option>Aplikasi Mobile</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="5" placeholder="Description" name="description"></textarea>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="location" class="form-control-label">Location</label>
                                <input class="form-control" type="text" placeholder="Location" id="location"
                                    name="location" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="start_date" class="form-control-label">Start Date</label>
                                <input class="form-control" type="date" id="start_date" name="start_date">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="end_date" class="form-control-label">End Date</label>
                                <input class="form-control" type="date" id="end_date" name="end_date">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="form-control-label">Requirement</label>
                                <p class="text-gradient text-dark mb-2 text-sm">Isi nanti di halaman edit</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="form-control-label">Application Proccess</label>
                                <p class="text-gradient text-dark mb-2 text-sm">Isi nanti di halaman edit</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="application_deadline" class="form-control-label">Application Deadline</label>
                                <input class="form-control" type="date" id="application_deadline"
                                    name="application_deadline">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
