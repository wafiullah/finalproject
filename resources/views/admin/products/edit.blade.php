@extends('layouts.admin_app')
@section('title') Update Category
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Update Category</a></li>
        </ol>
        <h6 class="slim-pagetitle">Update Category</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Update Category</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.categories.update',[$category->id]) }}" enctype="multipart/form-data"
                method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="title" value="{{ $category->title }}" placeholder="Title">
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Submit Form</button>
                    <a href="{{route('admin.categories.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
