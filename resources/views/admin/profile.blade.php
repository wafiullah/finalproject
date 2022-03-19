@extends('layouts.admin_app')
@section('title') Edit Profile
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="profile">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Edit Profile</a></li>
        </ol>
        <h6 class="slim-pagetitle">Edit Profile</h6>
    </div>
    <!-- slim-pageheader -->

    <div class="row row-sm mg-t-20">
        <div class="offset-3 col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="section-wrapper">
                @include('partials.alerts')
                <form class="form" action="{{ route('admin.profile.update') }}" method="post">
                    {{ csrf_field() }}
                
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ auth()->user()->name }}"
                                    placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password"
                                    placeholder="Current Password" name="current_password" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" id="password" placeholder="New Password"
                                    name="new_password" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    placeholder="Confirm Password" name="password_confirmation" value="">
                            </div>
                        </div>

                    </div>
                    <div class="form-layout-footer">
                        <button class="btn btn-primary bd-0" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
