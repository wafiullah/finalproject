@extends('layouts.admin_app')
@section('title') Users
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
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
            <h6 class="slim-pagetitle">Users</h6>
        </div>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <form action="{{route('admin.users')}}" method="GET">
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
                        <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Search</button>
                    </div>
                    </div>
                </form>
                <div class="table-wrapper">
                    <table class="table display table-condensed table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Account</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{$user->name}} </td>
                                <td>{{$user->email}}</td>
                                <td class="tx-12">
                                    @if($user->email_verified_at == "")
                                    <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                                    @else
                                    <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                                    @endif
                                </td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    @if($user->status == 0)
                                    <a href="#" data-target="#blockAccount" data-toggle="modal"
                                        class="btn btn-danger btn-sm" data-id="{{$user->id}}"> <i
                                            class="fa fa-lock"></i>
                                        Block</a>
                                    @else
                                    <a href="{{route('admin.user.unblock.account', $user->id)}}"
                                        onclick="return confirm('are you sure?')" class="btn btn-success btn-sm"> <i
                                            class="fa fa-unlock"></i>
                                        Unblock</a>
                                    @endif
                                    <form action="{{ route('admin.user.delete', $user->id) }}" method="post"
                                        style="display: inline-block;" onsubmit="return confirm('are you sure?')">
                                        @csrf {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                            Delete</button>
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
<div class="modal fade" id="blockAccount" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
</div>
<script>
    $('#blockAccount').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);

        var userId = button.data('id');
        $('.userId').val(userId);

    });

</script>

@endpush