@extends('layouts.admin_app')
@section('title') Sales
@endsection
@push('css')
<link href="{{asset('assets/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="sales">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sales</li>
            </ol>
            <h6 class="slim-pagetitle">Sales</h6>
        </div>
        <a id="contactNavicon" href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <a href="{{ route('admin.orders.create') }}" class="btn btn-primary mg-b-20 mg-l-20">Create
                    Order</a>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Discount</th>
                                <th>Customer</th>
                                <th>Order Date</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{optional($order->product)->title}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->discount}}%</td>
                                <td>{{optional($order->user)->name}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>Af {{$order->amount}}</td>
                                <td>
                                    <a href="{{route('admin.invoice',$order->id)}}"
                                        class="btn btn-success btn-sm">Generate Invoice</a>

                                        <a href="{{route('admin.orders.show',$order->id)}}"
                                            class="btn btn-success btn-sm">View</a>

                                    <a href="{{route('admin.orders.edit',$order->id)}}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="post"
                                        style="display: inline-block;" onsubmit="return confirm('are you sure?')">
                                        @csrf {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
@endsection
@push('js')
<script src="{{asset('assets/lib/datatables/js/datatables.min.js')}}"></script>
<script>
    $('#datatable1').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [{
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [0, ':visible']
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });

</script>


@endpush
