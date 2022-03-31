@extends('layouts.admin_app')
@section('title') Order Details
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="sales">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Order Details</a></li>
        </ol>
        <h6 class="slim-pagetitle">Order Details</h6>
    </div>
    <!-- slim-pageheader -->
    <div class="section-wrapper">
        <label class="section-title">Order Details</label>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-primary mb-4"><i class="fa fa-arrow-left fa-fw"></i>Back to Sales</a>
        <table class="table table-light">
            <tbody class="thead-light">
                <tr>
                    <th>ID</th>
                    <td>{{ $order->id }}</td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td>{{ optional($order->product)->title }}</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>{{$order->quantity}}</td>
                </tr>
                <tr>
                    <th>Discount</th>
                    <td>{{$order->discount}}%</td>
                </tr>
                <tr>
                    <th>Customer Name</th>
                    <td>{{optional($order->user)->name}}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{$order->order_date}}</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>Af {{$order->amount}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $order->address }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ $order->city }}</td>
                </tr>
                <tr>
                    <th>State</th>
                    <td>{{ $order->state }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $order->phone }}</td>
                </tr>
                <tr>
                    <th>Payment Method</th>
                    <td>{{ $order->payment_method }}</td>
                </tr>
                <tr>
                    <th>Notes</th>
                    <td>{{ $order->notes }}</td>
                </tr>
            </tbody>
            
        </table>
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

    $("#discount").on('change keyup', function (e) {
        calculateTotalAmount();
    });

    function calculateTotalAmount() {
        var totalAmount = 0;
        var productPrice = parseInt($('#product_id').find(':selected').attr('price'));
        var quantity = $("#quantity").val();
        var discount = $("#discount").val();
        var totalAmount = quantity * productPrice;
        $("#total_amount").val(totalAmount);
        if (discount > 0) {
            $("#total_amount").val(totalAmount - (discount * totalAmount) / 100);
        }
    }

</script>
@endpush
