@extends('layouts.admin_app')
@section('title') Update Product
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Update Product</a></li>
        </ol>
        <h6 class="slim-pagetitle">Update Product</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Update Product</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.products.update',[$product->id]) }}"
                enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="title" value="{{ $product->title }}"
                                placeholder="Title">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="price" value="{{ $product->price }}"
                                placeholder="Price">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Discounted Price: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="discounted_price"
                                value="{{ $product->discounted_price }}" placeholder="Discounted Price">
                        </div>
                    </div>
                </div>

                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Discription: <span class="tx-danger">*</span></label>
                            <textarea id="" cols="30" rows="10" name="description" class="form-control"
                                placeholder="Discription">{{ $product->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mg-b-25">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Upload Image 1</label>
                            <input type="file" class="form-control-file" name="image_file1" id="" placeholder=""
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Upload only images files.(JPG, PNG,
                                JPEG)</small>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ $product->image1 }}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Upload Image 2</label>
                            <input type="file" class="form-control-file" name="image_file2" id="" placeholder=""
                                aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Upload only images files.(JPG, PNG,
                                JPEG)</small>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ $product->image2 }}" class="img-fluid rounded-circle" alt="">
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Submit Form</button>
                    <a href="{{route('admin.products.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
