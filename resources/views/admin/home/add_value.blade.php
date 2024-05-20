@php
    $admin_home_page = true;
@endphp

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6>Add Value</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="/user-profile" method="POST" role="form text-left">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="value" class="form-control-label">Value</label>
                                <input class="form-control" type="text" placeholder="Value" id="value" name="content"
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-2">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
