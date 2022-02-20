@extends('layouts.admin_app')
@section('title')
Admin Dashboard
@endsection
@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="dashboard">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item " aria-current="page">Dashboard</li>
        </ol>
        <h6 class="slim-pagetitle">Dashboard</h6>
    </div>
    @include('partials.alerts')
    <div class="card card-dash-one ">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <i class="icon ion-ios-people"></i>
                <div class="dash-content">
                    <label class="tx-primary">Total Users</label>
                    <h2>{{$totalUsers}}</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <i class="icon ion-ios-people"></i>
                <div class="dash-content">
                    <label class="tx-primary">Total Employees</label>
                    <h2>{{$totalEmployees}}</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <i class="icon ion-ios-people"></i>
                <div class="dash-content">
                    <label class="tx-primary">Total Suppliers</label>
                    <h2>{{$totalSuppliers}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection