@extends('layouts.admin_app')
@section('title') Update Customer
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb" data-menu="users">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Update Customer</a></li>
        </ol>
        <h6 class="slim-pagetitle">Update Customer</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Update Customer</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.users.update',[$user->id]) }}" enctype="multipart/form-data"
                method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="name" value="{{ $user->name }}"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="email" required name="email" value="{{ $user->email }}"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" id="password" placeholder="New Password"
                                name="new_password" value="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                placeholder="Confirm Password" name="password_confirmation" value="">
                            </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Update Customer</button>
                    <a href="{{route('admin.users.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
