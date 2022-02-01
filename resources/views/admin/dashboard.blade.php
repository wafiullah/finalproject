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
</div>
@endsection