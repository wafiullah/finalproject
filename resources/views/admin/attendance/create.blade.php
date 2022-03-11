@extends('layouts.admin_app')
@section('title') Take Attendance
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader" data-menu="attendance">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Take Attendance</a></li>
        </ol>
        <h6 class="slim-pagetitle">Take Attendance</h6>
    </div>
    <div class="section-wrapper">
        <label class="section-title">Take Attendance</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form role="form" action="{{ route('admin.attendance.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <h2 class="text-center my-4 text-bold text-primary">Today : {{ date('d F Y') }}</h2>
                    <div class="row">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @csrf
                                @foreach($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>
                                        <img width="40" height="40" class="img-fluid img-rounded"
                                            src="{{ $employee->photo }}" alt="{{ $employee->name }}">
                                    </td>
                                    <input type="hidden" name="employee_id[]" value="{{ $employee->id }}">
                                    <td>
                                        <label>

                                            <input type="radio" name="attendance[{{ $employee->id }}]" value="1"
                                                required>
                                            Present
                                        </label>
                                        <label>
                                            <input type="radio" name="attendance[{{ $employee->id }}]" value="0">
                                            Absent
                                        </label>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Take Attendance</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
