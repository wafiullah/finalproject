@extends('layouts.admin_app')
@section('title') Attendance
@endsection
@push('css')
<link href="{{asset('assets/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="attendance">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Attendance</li>
            </ol>
            <h6 class="slim-pagetitle">Attendance</h6>
        </div>
        <a id="contactNavicon" href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <a href="{{ route('admin.attendance.create') }}" class="btn btn-primary mg-b-20 mg-l-20">Take
                    Attendance</a>

                    <a href="{{ route('admin.attendance-monthly') }}" class="btn btn-primary mg-b-20 mg-l-20">
                        Monthly Attendance</a>

                <div class="table-wrapper">
                    <table id="datatable1" class="table table-bordered table-striped text-center" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Attendance Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dates as $key => $date)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ date("l, d F Y", strtotime($date->date)) }}</td>
                                <td>
                                    <a href="{{ route('admin.attendance.show', date("Y-m-d", strtotime($date->date))) }}"
                                        class="btn
                                        btn-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('admin.attendance.edit', date("Y-m-d", strtotime($date->date))) }}"
                                        class="btn
                                        btn-info">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <form id="delete-form-{{ date("Ymd", strtotime($date->date)) }}"
                                        style="display: contents;"
                                        action="{{ route('admin.attendance.destroy', date("Y-m-d", strtotime($date->date))) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"
                                            onclick="deleteItem({{ date("Ymd", strtotime($date->date)) }})">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
