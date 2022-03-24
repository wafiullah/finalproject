@extends('layouts.admin_app')
@section('title') Update Order
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="sales">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Update Order</a></li>
        </ol>
        <h6 class="slim-pagetitle">Update Order</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Update Order</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form class="form" action="{{ route('admin.orders.update',[$order->id]) }}" enctype="multipart/form-data"
                method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="product_id">Select Product</label>
                            <select class="form-control" name="product_id" id="product_id">
                                <option value="">Select Product</option>
                                @foreach ($products as $product)
                                <option value="{{ $product->id }}" price="{{ $product->discounted_price }}"
                                    @if($product->id == $order->product_id)
                                    selected
                                    @endif>{{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" min="1" id="quantity" required name="quantity"
                                value="{{ $order->quantity }}" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Discount: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="discount_in_one" required name="discount"
                                value="{{ old('discount') }}" placeholder="Discount">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Amount: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="total_amount" required name="amount"
                                value="{{ $order->amount }}" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="user_id">Select Customer</label>
                            <select class="form-control" name="user_id" id="user_id">
                                <option value="">Select Customer</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}" @if ($user->id == $order->user_id)
                                    selected
                                    @endif>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Order Date: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="datepicker" required name="order_date"
                                value="{{ $order->order_date }}">
                        </div>
                    </div>
                </div>

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" type="submit">Update Order</button>
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
    calculateTotalAmount();

    function calculateTotalAmount() {
        var totalAmount = 0;
        var productPrice = parseInt($('#product_id').find(':selected').attr('price'));
        var quantity = $("#quantity").val();
        $("#total_amount").val(quantity * productPrice);
    }
</script>
@endpush
