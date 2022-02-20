@extends('layouts.admin_app')
@section('title') Add Supplier
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Add Supplier</a></li>
        </ol>
        <h6 class="slim-pagetitle">Add Supplier</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Add Supplier</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.suppliers.store') }}" enctype="multipart/form-data"
                method="post">
                {{ csrf_field() }}
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="name" value="{{ old('name') }}"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Email: </label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Address: </label>
                            <input class="form-control" type="text" name="address" value="{{ old('address') }}"
                                placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Mobile: </label>
                            <input class="form-control" type="text" name="mobile" value="{{ old('mobile') }}"
                                placeholder="Mobile">
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Submit</button>
                    <a href="{{route('admin.suppliers.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
