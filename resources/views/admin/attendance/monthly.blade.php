@extends('layouts.admin_app')
@section('title') Monthly Attendance
@endsection
@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link href="{{asset('assets/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">

@endpush
@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="attendance">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Monthly Attendance</li>
            </ol>
            <h6 class="slim-pagetitle">Monthly Attendance</h6>
        </div>
        <a id="contactNavicon" href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <form action="{{route('admin.attendance-monthly')}}" method="GET">
                    {{-- <div class="row no-gutters">
                        <div class="col-lg-3">
                            <div class="dash-content">
                                <label class="tx-primary">Total Absents</label>
                                <h2>{{$totalAbsents}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="dash-content">
                                <label class="tx-primary">Total Presents</label>
                                <h2>{{$totalPresent}}</h2>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="form-control-label">Start Date: <span class="tx-danger">*</span></label>
                                <input class="form-control datepicker" type="text" required name="start_date"
                                    value="{{ request()->start_date }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="form-control-label">End Date: <span class="tx-danger">*</span></label>
                                <input class="form-control datepicker" type="text" required name="end_date"
                                    value="{{ request()->end_date }}">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Search</button>
                            <a href="{{ route('admin.attendance-monthly') }}" class="btn btn-danger"
                                style="margin-top: 25px;">Reset
                            </a>
                        </div>
                    </div>
                </form>
                <div class="table-wrapper">
                    <table id="datatable1" class="table table-bordered table-striped text-center" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Photo</th>
                                <th>Present</th>
                                <th>Absent</th>
                                <th>Generated Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $count=1;
                            @endphp
                            @foreach($monthlyAttendances as $key => $attendance)
                            @php
                            $salaryDeduction=1000;
                            $salaryDeducted=$attendance[0]['employee']['salary'];
                            @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $attendance[0]['employee']['name'] }}</td>
                                <td>{{ $attendance[0]['employee']['salary'] }}</td>
                                <td>
                                    <img width="40" height="40" class="img-fluid img-rounded"
                                        src="{{ $attendance[0]['employee']['photo'] }}"
                                        alt="{{ $attendance[0]['employee']['name'] }}">
                                </td>
                                <td>
                                    @if($attendance[0]['attendance'] == 1)
                                    <span class="badge badge-success">{{ $attendance[0]['present'] }}</span>
                                    @elseif(isset( $attendance[1]) && $attendance[1]['attendance'] == 1)
                                    <span class="badge badge-success">{{ $attendance[1]['present'] }}</span>
                                    @else
                                    <span class="badge badge-success">0</span>
                                    @endif
                                    </td>
                                    <td>
                                        @if($attendance[0]['attendance'] == 0)
                                        <span class="badge badge-danger">{{ $attendance[0]['absent'] }}</span>
                                        @php
                                        $salaryDeducted = $attendance[0]['employee']['salary'] - $salaryDeduction;
                                        @endphp
                                        @elseif(isset( $attendance[1]) && $attendance[1]['attendance'] == 0)
                                        @php
                                        $salaryDeducted = $attendance[0]['employee']['salary'] - $salaryDeduction;
                                        @endphp
                                        <span class="badge badge-danger">{{ $attendance[1]['absent'] }}</span>
                                        @else
                                        <span class="badge badge-danger">0</span>
                                    @endif
                                </td>
                            </tr>
                            @php
                            $count++;
                            @endphp
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
<script src="{{ asset('assets/lib/jquery-ui/js/jquery-ui.js') }}"></script>
<script>
    $(function () {
        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
</script>
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
