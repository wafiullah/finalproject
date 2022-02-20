@extends('layouts.admin_app')
@section('title') Create Employee
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Create Employee</a></li>
        </ol>
        <h6 class="slim-pagetitle">Create Employee</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Create Employee</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.employees.store') }}" enctype="multipart/form-data"
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
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="email" required name="email" value="{{ old('email') }}"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="mobile" value="{{ old('mobile') }}"
                                placeholder="Mobile">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="address" value="{{ old('address') }}"
                                placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">State: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="state" value="{{ old('state') }}"
                                placeholder="State">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="city" value="{{ old('city') }}"
                                placeholder="City">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="designation"
                                value="{{ old('designation') }}" placeholder="Designation">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Salary: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" required name="salary" value="{{ old('salary') }}"
                                placeholder="Salary">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Experience: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="experience"
                                value="{{ old('experience') }}" placeholder="Experience">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Joining Date: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="date" required name="joining_date"
                                value="{{ old('joining_date') }}">
                        </div>
                    </div>
                </div>

                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Upload Profile Picture</label>
                            <input type="file" class="form-control-file" name="photo" id="" placeholder=""
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Upload only images files.(JPG, PNG,
                                JPEG)</small>
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Create Employee</button>
                    <a href="{{route('admin.employees.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
