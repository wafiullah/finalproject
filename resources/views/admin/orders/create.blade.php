@extends('layouts.admin_app')
@section('title') Create Order
@endsection
@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
@endpush
@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="sales">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Create Order</a></li>
        </ol>
        <h6 class="slim-pagetitle">Create Order</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Create Order</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.orders.store') }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="product_id">Select Product</label>
                            <select class="form-control" name="product_id" id="product_id">
                                <option value="">Select Product</option>
                                @foreach ($products as $product)
                                <option value="{{ $product->id }}" price="{{ $product->discounted_price }}">
                                    {{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" min="1" required id="quantity" name="quantity"
                                value="{{ old('quantity') }}" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Discount: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="discount" required name="discount"
                                value="{{ old('discount') }}" placeholder="Discount">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Total Amount: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="total_amount" required name="amount"
                                value="{{ old('amount') }}" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="user_id">Select Customer</label>
                            <select class="form-control" name="user_id" id="user_id">
                                <option value="">Select Customer</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Order Date: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="datepicker" required name="order_date"
                                value="{{ old('order_date') }}">
                        </div>
                    </div>
                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Create Order</button>
                    <a href="{{route('admin.orders.index')}}" class="btn btn-secondary bd-0">Cancel</a>
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
    $('#product_id').change(function (e) {
    e.preventDefault();
    calculateTotalAmount();
    });

    $("#quantity").on('change keyup', function (e) {
    calculateTotalAmount();
    });

    function calculateTotalAmount() {
    var totalAmount = 0;
    var productPrice = parseInt($('#product_id').find(':selected').attr('price'));
    var quantity = $("#quantity").val();
    var discount = $("#discount").val();

    // $("#total_amount").val(quantity * productPrice);
    $("#total_amount").val((discount * productPrice)/100 * quantity );

    }

</script>
@endpush
