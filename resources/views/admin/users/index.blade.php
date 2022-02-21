@extends('layouts.admin_app')
@section('title') Customers
@endsection
@push('css')
<link href="{{asset('assets/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="users">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customers</li>
            </ol>
            <h6 class="slim-pagetitle">Customers</h6>
        </div>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            <form action="{{route('admin.users.index')}}" method="GET">
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
                        <button type="reset" class="btn btn-primary" style="margin-top: 25px;">reset</button>
                        <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Search</button>
                    </div>
                </div>
            </form>
            @include('partials.alerts')
            <div class="section-wrapper">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary mg-b-20 mg-l-20">Add
                    Customer</a>
                <div class="table-wrapper">
                    <table class="table display table-condensed table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{$user->name}} </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <a href="{{route('admin.users.edit',$user->id)}}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="post"
                                        style="display: inline-block;" onsubmit="return confirm('are you sure?')">
                                        @csrf {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty @endforelse
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{asset('assets/lib/datatables/js/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTable.js')}}"></script>
<!-- Modal -->
{{-- <div class="modal fade" id="blockAccount" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('admin.user.block.account')}}" onsubmit="return confirm('are you sure?')" method="POST">
            <div class="modal-content" style="width: 417px;">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Block Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <input type="hidden" name="userId" class="userId">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Block Account</button>
                </div>
            </div>
        </form>
    </div>
</div> --}}
<script>
    $('#blockAccount').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);

        var userId = button.data('id');
        $('.userId').val(userId);

    });

</script>

@endpush