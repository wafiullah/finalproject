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
                    <label class="tx-primary">Total Customers</label>
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
    <div class="card card-dash-one mt-4">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <i class="icon ion-ios-cart"></i>
                <div class="dash-content">
                    <label class="tx-primary">Total Sales</label>
                    <h2>{{$totalOrders}}</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <i class="icon ion-ios-cart"></i>
                <div class="dash-content">
                    <label class="tx-primary">Total Sales Amount</label>
                    <h2>Af {{number_format($totalAmountSales,2)}}</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <i class="icon ion-ios-cart"></i>
                <div class="dash-content">
                    <label class="tx-primary">Total Purchase Material Amount</label>
                    <h2>Af {{number_format($totalMaterialPurchaseAmount,2)}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-dash-one mt-4">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <i class="icon ion-ios-cart"></i>
                <div class="dash-content">
                    <label class="tx-primary">Total Profit Amount</label>
                    <h2>Af {{number_format($totalAmountSales-$totalMaterialPurchaseAmount,2)}}</h2>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="py-12 container">
    <h6 class="slim-pagetitle">Product Sales Chart</h6>
    <div id="chart" style="height: 300px;"></div>
</div>
<script src="{{ asset('assets/lib/Chart.min.js') }}"></script>
<script src="{{ asset('assets/lib/chartisan_chartjs.umd.js') }}"></script>

<script>
    const SalesChart = new Chartisan({
        el: '#chart',
        url: '@chart("sales_chart")',
        hooks: new ChartisanHooks()
        .colors(['#18d6a4', '#4299E1'])
        
            .responsive()
            .beginAtZero()
    })

</script>
@endsection
