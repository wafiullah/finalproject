@extends('layouts.admin_app')
@section('title') Employee
@endsection
@push('css')
<link href="{{asset('assets/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="employees">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Employee</li>
            </ol>
            <h6 class="slim-pagetitle">Employee</h6>
        </div>
        <a id="contactNavicon" href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">

                <button type="button" class="btn btn-primary mg-b-20 mg-l-20" data-toggle="modal"
                    data-target="#generateSalary">
                    Generate Salary
                </button>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Month</th>
                                <th>Year</th>
                                <th>Absents</th>
                                <th>Presents</th>
                                <th>Generated Salary</th>
                                <th>Joining Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($salaries as $salary)
                            <tr>
                                <td>{{$salary->employee->name}}</td>
                                <td>{{$salary->month}}</td>
                                <td>{{$salary->year}}</td>
                                <td>{{$salary->absents}}</td>
                                <td>{{$salary->presents}}</td>
                                <td>Af {{$salary->generated_salary}}</td>
                                <td>{{ date("l, d F Y", strtotime($salary->created_at)) }}</td>
                            </tr>
                            @empty @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="generateSalary" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generate Salary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" action="{{ route('admin.employee-salary.store') }}" enctype="multipart/form-data"
                method="post">
                {{ csrf_field() }}
                <div class="modal-body">

                    <input type="hidden" value="{{ request()->id }}" name="employee_id" id="">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Select Month: <span class="tx-danger">*</span></label>
                                <select class="form-control select-picker" name="month" required id="month"
                                    tabindex="null">
                                    <option value="">Select Month</option>
                                    @for ($i = 1; $i <=12; $i++) <option
                                        value="{{ strtolower(date('F', mktime(0, 0, 0, $i))) }}">
                                        {{ date('F', mktime(0, 0, 0, $i)) }} </option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Select Year: <span class="tx-danger">*</span></label>
                                <select class="form-control select-picker" name="year" required id="year"
                                    tabindex="null">
                                    <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Absents: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" id="absents" readonly required name="absents"
                                    value="{{ old('absents') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Presents: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" id="presents" readonly required
                                    name="presents" value="{{ old('presents') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Generated Salary in Af: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="number" id="generatedSalary" readonly required
                                    name="generated_salary" value="{{ old('generated_salary') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Deducted Salary in Af: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="number" id="deductedSalary" readonly required
                                    name="deducted_salary" value="{{ old('deducted_salary') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal -->
@endsection
@push('js')
<script src="{{asset('assets/lib/datatables/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/lib/axios.min.js')}}"></script>
<script>
    var employeeId = '{{ request()->id }}';
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

    $('body').on('change', '#month', function () {
        $("#presents").val('');
        $("#absents").val('');
        $("#generatedSalary").val('');
        $("#deductedSalary").val('');
        axios.get('/admin/employee/attendance', {
                params: {
                    id: employeeId,
                    month: $(this).val(),
                    year: $("#year").val()
                }
            })
            .then(function (response) {
                // handle success
                if (response.data.attendances.length == 0) {
                    alert('No Attendace found for selected month.');
                    return;
                }
                $("#presents").val(response.data.totalPresent);
                $("#absents").val(response.data.totalAbsents);
                $("#generatedSalary").val(response.data.generatedSalary);
                $("#deductedSalary").val(response.data.deductedSalary);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });
    });
</script>


@endpush
