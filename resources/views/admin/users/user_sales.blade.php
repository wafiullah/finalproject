@extends('layouts.admin_app')
@section('title') User Sales
@endsection

@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="users">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Sales</li>
            </ol>
            <h6 class="slim-pagetitle">User Sales</h6>
        </div>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <div class="table-wrapper">
                    <table class="table display responsive datatable container-fluid " style="width:100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>User Name</th>
                                <th>Published</th>
                                <th>Address</th>
                                <th>Package</th>
                                <th>Visits</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sales as $sale)
                            <tr>
                                <td>{{$sale->id}}</td>
                                <td>{{$sale->title}}</td>
                                <td>{{optional($sale->user)->first_name}} {{optional($sale->user)->last_name}}</td>
                                <td>{{$sale->published_at}}</td>
                                <td>{{$sale->address}} {{$sale->city}} {{optional($sale->state)->name}}</td>
                                <td>{{optional($sale->package)->title}}</td>
                                <td>{{$sale->visits}}</td>
                                <td>{{$sale->start_date}}</td>
                                <td>{{$sale->end_date}}</td>
                                <td>
                                    <a href="{{route('sale.details', [$sale->singleCategory->category->slug,$sale->slug])}}" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-eye fa-fw"> </i> View</a>

                                    <a href="{{route('admin.sale.address', $sale->id)}}" class="btn  btn-success btn-sm"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                    <form action="{{ route('admin.sale.notajaxdelete', $sale->id) }}" method="post" style="display: inline-block;" onsubmit="return confirm('are you sure?')">
                                        @csrf {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>User Name</th>
                                <th>Published</th>
                                <th>Address</th>
                                <th>Package</th>
                                <th>Visits</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                    {{$sales->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
