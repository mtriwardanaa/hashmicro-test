@extends('layouts.base')

@section('title', 'User')
@section('user', 'open')
@section('user-child', 'active')
@section('user-list', 'active')

@section('left-title')
    <div class="my-auto">
        <h5 class="page-title fs-21 mb-1">User</h5>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </nav>
    </div>
@endsection

@section('script')
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            new DataTable('#myTable', {
                columnDefs: [{
                        orderable: false,
                        targets: 2
                    },
                    {
                        width: '5%',
                        targets: 0
                    },
                ]
            }, );
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($users))
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user['name'] }}</td>
                                            <td>{{ $user['username'] }}</td>
                                            <td>{{ $user['email'] }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
