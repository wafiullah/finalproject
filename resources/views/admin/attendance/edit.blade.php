@extends('layouts.admin_app')
@section('title') Update Attendance
@endsection

@section('content')
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Update Attendance</a></li>
        </ol>
        <h6 class="slim-pagetitle">Update Attendance</h6>
    </div>
    <div class="section-wrapper">
        <label class="section-title">Update Attendance</label>
        <div class="form-layout">
            @include('partials.alerts')
            <form action="{{ route('admin.attendace-update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h2 class="text-center my-4 text-bold text-primary">Date : {{ date('l, d F Y', strtotime($date)) }}
                    </h2>
                    <div class="row">
                        <table class="table table-striped table-bordered text-center">
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
                                    <input type="hidden" name="id[]" value="{{ $attendance->id }}">
                                    <td>
                                        <label>
                                            <input type="radio" name="attendance[{{ $attendance->id }}]" value="1"
                                                {{ $attendance->attendance == 1 ? 'checked' : '' }} required>Present
                                        </label>
                                        <label>
                                            <input type="radio" name="attendance[{{ $attendance->id }}]" value="0"
                                                {{ $attendance->attendance == 0 ? 'checked' : '' }}>Absent
                                        </label>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Attendance</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
