@extends('layouts.admin_app')
@section('title') Purchase Materials
@endsection
@push('css')
<link href="{{asset('assets/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="purchase-materials">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Purchase Materials</li>
            </ol>
            <h6 class="slim-pagetitle">Purchase Materials</h6>
        </div>
        <a id="contactNavicon" href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <a href="{{ route('admin.purchase-materials.create') }}" class="btn btn-primary mg-b-20 mg-l-20">Add
                    Purchase Material</a>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Unit Price</th>
                                <th>Supplier Name</th>
                                <th>Total Amount</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Purchase Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($purchase_materials as $material)
                            <tr>
                                <td>{{$material->title}}</td>
                                <td>{{$material->unit_price}}</td>
                                <td>{{optional($material->supplier)->name}}</td>
                                <td>Af {{$material->total_amount}}</td>
                                <td>{{$material->unit}}</td>
                                <td>{{$material->quantity}}</td>
                                <td>{{$material->purchase_date}}</td>
                                <td>
                                    <a href="{{route('admin.purchase-materials.edit',$material->id)}}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('admin.purchase-materials.destroy', $material->id) }}"
                                        method="post" style="display: inline-block;"
                                        onsubmit="return confirm('are you sure?')">
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
