@extends('layouts.admin_app')
@section('title') Update Purchase Material
@endsection
@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
@endpush

@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="purchase-materials">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Update Purchase Material</a></li>
        </ol>
        <h6 class="slim-pagetitle">Update Purchase Material</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Update Purchase Material</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.purchase-materials.update', $material->id) }}"
                enctype="multipart/form-data" method="post">
                @method('PUT')
                {{ csrf_field() }}
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="supplier_id">Select Supplier</label>
                            <select class="form-control" name="supplier_id" id="supplier_id">
                                <option value="">Select Supplier</option>
                                @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}" @if($supplier->id == $material->supplier_id)selected
                                    @endif>{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Select Unit</label>
                            <select class="form-control" name="unit" id="unit">
                                <option value="Kg" @if($material->unit == "Kg")selected @endif>Kilogram</option>
                                <option value="t" @if($material->unit == "t")selected @endif>Tonne</option>
                                <option value="Gt" @if($material->unit == "Gt")selected @endif>Gigatonne</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Material Title: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" required name="title" value="{{ $material->title }}"
                                placeholder="Material Title">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="quantity" required name="quantity"
                                value="{{ $material->quantity }}" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Unit Price: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="unit_price" required name="unit_price"
                                value="{{ $material->unit_price }}" placeholder="Unit Price">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Total Amount: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="total_amount" required name="total_amount"
                                value="{{ $material->total_amount }}" placeholder="Total Amount">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Purchase Date: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="datepicker" required name="purchase_date"
                                value="{{ $material->purchase_date }}">
                        </div>
                    </div>
                </div>
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Discription: <span class="tx-danger">*</span></label>
                            <textarea id="" cols="30" rows="10" name="description" class="form-control"
                                placeholder="Discription">{{ $material->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Submit</button>
                    <a href="{{route('admin.purchase-materials.index')}}" class="btn btn-secondary bd-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('assets/lib/jquery-ui/js/jquery-ui.js') }}"></script>
<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
$("#quantity").on('change keyup', function (e) {
calculateTotalAmount();
});
$("#unit_price").on('change keyup', function (e) {
calculateTotalAmount();
});
calculateTotalAmount();
function calculateTotalAmount() {
var totalAmount = 0;
var unitPrice = parseInt($('#unit_price').val());
var quantity = $("#quantity").val();
$("#total_amount").val(quantity * unitPrice);
}
</script>
@endpush
