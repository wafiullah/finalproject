@extends('layouts.admin_app')
@section('title') Generate Salary
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="employees">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Generate Salary</a></li>
        </ol>
        <h6 class="slim-pagetitle">Generate Salary</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Generate Salary</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.employee-salary.store') }}" enctype="multipart/form-data"
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
                            <label class="form-control-label">Joining Date: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="date" required name="joining_date"
                                value="{{ old('joining_date') }}">
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Generate Salary</button>
                    <a href="{{route('admin.employee-salary.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@push('js')
@endpush
