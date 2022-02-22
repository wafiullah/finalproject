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

            <form action="{{route('admin.employees.index')}}" method="GET">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Enter Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="Enter Name"
                                aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Enter Email"
                                aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-primary"
                            style="margin-top: 25px;">Reset
                        </a>
                        <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Search</button>
                    </div>
                </div>
            </form>
            @include('partials.alerts')
            <div class="section-wrapper">
                <a href="{{ route('admin.employees.create') }}" class="btn btn-primary mg-b-20 mg-l-20">Create
                    Employee</a>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Designation</th>
                                <th>Salary</th>
                                <th>Experience</th>
                                <th>Joining Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $employee)
                            <tr>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->mobile}}</td>
                                <td>{{$employee->address}}</td>
                                <td>{{$employee->state}}</td>
                                <td>{{$employee->city}}</td>
                                <td>{{$employee->designation}}</td>
                                <td>Af {{$employee->salary}}</td>
                                <td>{{$employee->experience}}</td>
                                <td>{{$employee->joining_date}}</td>
                                <td>
                                    <a href="{{route('admin.employee-salary.index',['id' => $employee->id])}}"
                                        class="btn btn-success btn-sm">Generate Salary</a>

                                    <a href="{{route('admin.employees.edit',$employee->id)}}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="post"
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
