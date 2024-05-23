@php
    $admin_open_volunteer_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Edit Open Volunteer</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="/user-profile" method="POST" enctype="multipart/form-data">
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
                                <label for="requirement" class="form-control-label">Requirement</label>
                                <div class="list-group-item border-0 d-flex mb-2 pt-2 px-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm p-2">Lorem ipsum dolor sit ametLorem ipsum dolor sit amet
                                            Lorem ipsum
                                            dolor sit amet Lorem ipsum dolor sit amet</h6>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                        <a class="btn btn-link text-dark mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 d-flex mb-2 pt-2 px-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm p-2">Lorem ipsum dolor sit ametLorem ipsum dolor sit amet
                                            Lorem ipsum
                                            dolor sit amet Lorem ipsum dolor sit amet</h6>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                        <a class="btn btn-link text-dark mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="#" class="btn bg-gradient-dark btn-md mt-2 mb-2">Add Requirement</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="proccess" class="form-control-label">Application Proccess</label>
                                <div class="list-group-item border-0 d-flex mb-2 pt-2 px-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm p-2">Lorem ipsum dolor sit ametLorem ipsum dolor sit amet
                                            Lorem ipsum
                                            dolor sit amet Lorem ipsum dolor sit amet</h6>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                        <a class="btn btn-link text-dark mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 d-flex mb-2 pt-2 px-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm p-2">Lorem ipsum dolor sit ametLorem ipsum dolor sit amet
                                            Lorem ipsum
                                            dolor sit amet Lorem ipsum dolor sit amet</h6>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                        <a class="btn btn-link text-dark mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="#" class="btn bg-gradient-dark btn-md mt-2 mb-2">Add Application
                                        Proccess</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="application_deadline" class="form-control-label">Application Deadline</label>
                                <input class="form-control" type="date" id="application_deadline"
                                    name="application_deadline">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image</label>
                                <div class="col-md-6 d-block shadow-xl border-radius-xl mb-4">
                                    <img src="{{ asset('admin/assets') }}/img/home-decor-1.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" id="image" name="image">
                                    <p class="text-gradient text-dark mb-2 text-sm">Abaikan jika tidak ingin mengubah
                                        gambar</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
