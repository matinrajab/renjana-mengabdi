@php
    $admin_home_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Edit Value</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="/admin/value/update/{{ $value->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="value" class="form-control-label">Value</label>
                                <textarea class="form-control" id="value" rows="3" placeholder="value" name="content" required>{{ $value->content }}</textarea>
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-2">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
