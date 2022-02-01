@extends('layouts.admin_app')
@section('title') Profile
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="profile">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Profile</a></li>
        </ol>
        <h6 class="slim-pagetitle">Profile</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="row row-sm">
        <div class="col-lg-8">
            <div class="card card-profile">
                <div class="card-body">
                    <div class="media">
                        {{-- <img src="http://via.placeholder.com/500x500" alt="" style="width: 120px;border-radius: 100%;"> --}}
                        @if($user->picture == '')
                        <img src="{{ asset('assets/img/avatar.png') }}" alt="avatar" style="width: 120px;" class="img-responsive  ">
                        @else
                        <img src="{{ asset('uploads/profile/'.$user->picture) }}" style="width: 120px;" alt="avatar" class="img-responsive  ">
                        @endif
                        <div class="media-body" style="margin-left: 30px;">
                            <h3 class="card-profile-name">{{$user->first_name}} {{$user->last_name}}</h3>
                            <p> {{$user->city}}, {{optional($user->state)->name}}</p>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- card-body -->

            </div><!-- card -->
            <div class="card pd-25 mg-t-20">
                <div class="slim-card-title">Contact &amp; Personal Info</div>

                <div class="media-list mg-t-25">
                    <div class="media mg-t-25">
                        <div><i class="icon ion-ios-telephone-outline tx-24 lh-0"></i></div>
                        <div class="media-body mg-l-15 mg-t-4">
                            <h6 class="tx-14 tx-gray-700">Phone Number</h6>
                            <span class="d-block">{{$user->contact_number}}</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media mg-t-25">
                        <div><i class="icon ion-ios-email-outline tx-24 lh-0"></i></div>
                        <div class="media-body mg-l-15 mg-t-4">
                            <h6 class="tx-14 tx-gray-700">Email Address</h6>
                            <span class="d-block">{{$user->email}}</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media mg-t-25">
                        <div><i class="icon ion-social-point tx-18 lh-0"></i></div>
                        <div class="media-body mg-l-15 mg-t-2">
                            <h6 class="tx-14 tx-gray-700">Address</h6>
                            {{$user->address}}
                        </div><!-- media-body -->
                    </div><!-- media -->
                </div><!-- media-list -->
            </div><!-- card -->
        </div><!-- col-8 -->

        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-connection">
                <div class="row row-xs">
                    <div class="col-4 tx-primary">{{$sales}}</div>
                    <div class="col-8">Total Sales Posted.</div>
                </div><!-- row -->
            </div><!-- card -->
        </div><!-- col-4 -->
    </div><!-- row -->
</div>
@endsection
