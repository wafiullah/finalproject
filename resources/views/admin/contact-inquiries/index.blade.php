@extends('layouts.admin_app')
@section('title') Contact Inquiries
@endsection
@push('css')
<link href="{{asset('assets/lib/datatables/css/jquery.dataTables.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="manager-header">
        <div class="slim-pageheader" data-menu="suppliers">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Inquiries</li>
            </ol>
            <h6 class="slim-pagetitle">Contact Inquiries</h6>
        </div>
        <a id="contactNavicon" href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
    </div>
    <div class="manager-wrapper">
        <div class="manager-right">
            @include('partials.alerts')
            <div class="section-wrapper">
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contact_inquiries as $inquiry)
                            <tr>
                                <td>{{$inquiry->name}}</td>
                                <td>{{$inquiry->email}}</td>
                                <td>{{$inquiry->subject}}</td>
                                <td>{{$inquiry->message}}</td>
                                <td>{{ date("l, d F Y", strtotime($inquiry->created_at)) }}</td>
                                <td>
                                    <form action="{{ route('admin.contact-inquiries.destroy', $inquiry->id) }}"
                                        method="post" style="display: inline-block;"
                                        onsubmit="return confirm('are you sure?')">
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
