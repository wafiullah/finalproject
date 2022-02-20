@extends('layouts.admin_app')
@section('title') View Attendance
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
                <li class="breadcrumb-item active" aria-current="page">View Attendance</li>
            </ol>
            <h6 class="slim-pagetitle">View Attendance</h6>
        </div>
        <a id="contactNavicon" href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <h2 class="text-center my-4 text-bold text-primary">Date : {{ date("l, d F Y", strtotime($date)) }}</h2>

                <div class="table-wrapper">
                    <table id="datatable1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendances as $key => $attendance)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $attendance->employee->name }}</td>
                                <td>
                                    <img width="40" height="40" class="img-fluid img-rounded"
                                        src="{{ $attendance->employee->photo }}"
                                        alt="{{ $attendance->employee->name }}">
                                </td>
                                <td>
                                    @if($attendance->attendance == '1')
                                    <span class="badge badge-success">Present</span>
                                    @else
                                    <span class="badge badge-danger">Absent</span>
                                    @endif
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
