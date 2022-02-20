@extends('layouts.admin_app')
@section('title') Update Employee
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Update Employee</a></li>
        </ol>
        <h6 class="slim-pagetitle">Update Employee</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Update Employee</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.employees.update',[$employee->id]) }}"
                enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="name" value="{{ $employee->name }}"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="email" required name="email"
                                value="{{ $employee->email }}" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="mobile"
                                value="{{ $employee->mobile }}" placeholder="Mobile">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="address"
                                value="{{ $employee->address }}" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">State: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="state" value="{{ $employee->state }}"
                                placeholder="State">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="city" value="{{ $employee->city }}"
                                placeholder="City">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="designation"
                                value="{{ $employee->designation }}" placeholder="Designation">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Salary: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" required name="salary"
                                value="{{ $employee->salary }}" placeholder="Salary">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Experience: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="experience"
                                value="{{ $employee->experience }}" placeholder="Experience">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Joining Date: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="date" required name="joining_date"
                                value="{{ $employee->joining_date }}">
                        </div>
                    </div>
                </div>

                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Upload Profile Picture</label>
                            <input type="file" class="form-control-file" name="photo" id=""
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Upload only images files.(JPG, PNG,
                                JPEG)</small>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ $employee->photo }}" class="img-fluid rounded-circle" alt="">
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Submit Form</button>
                    <a href="{{route('admin.employees.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
