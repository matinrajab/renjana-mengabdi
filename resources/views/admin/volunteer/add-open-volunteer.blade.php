@php
    $admin_open_volunteer_page = true;
    $page_name = 'Volunteer Project';
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Add Volunteer Project</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="/admin/open-volunteer/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="program_name" class="form-control-label">Program Name</label>
                                <input class="form-control" type="text" placeholder="Program Name" id="program_name"
                                    required name="program_name" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="volunteer_type_id" class="form-control-label">Category</label>
                                <select id="volunteer_type_id" name="volunteer_type_id" class="form-select">
                                    @foreach ($volunteerTypes as $item)
                                        <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="5" placeholder="Description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="location" class="form-control-label">Location</label>
                                <input class="form-control" type="text" placeholder="Location" id="location" required
                                    name="location" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="start_date" class="form-control-label">Start Date</label>
                                <input class="form-control" type="date" id="start_date" required name="start_date">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="end_date" class="form-control-label">End Date</label>
                                <input class="form-control" type="date" id="end_date" required name="end_date">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="requirements" class="form-control-label">Requirement</label>
                                <textarea class="form-control" id="requirements" rows="5" placeholder="Requirement" name="requirements"></textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="application_process" class="form-control-label">Application Proccess</label>
                                <textarea class="form-control" id="application_process" rows="5" placeholder="Application Proccess"
                                    name="application_process"></textarea>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="application_deadline" class="form-control-label">Application Deadline</label>
                                <input class="form-control" type="date" id="application_deadline" required
                                    name="application_deadline">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image (max: 2 mb)</label>
                                <input class="form-control" type="file" id="image" required name="image">
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

@push('scriptjs')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#requirements'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#application_process'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
