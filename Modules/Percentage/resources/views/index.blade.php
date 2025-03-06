@extends('layouts.base')

@section('title', 'Persentase')
@section('persentase', 'open')
@section('persentase-child', 'active')
@section('persentase-list', 'active')

@section('left-title')
    <div class="my-auto">
        <h5 class="page-title fs-21 mb-1">Persentase</h5>
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
                columnDefs: [
                    {
                        orderable: false,
                        targets: 4
                    },
                    {
                        orderable: false,
                        targets: 5
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
                                    <th>Input 1</th>
                                    <th>Input 2</th>
                                    <th>Hasil</th>
                                    <th>Pesan</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($percentages))
                                    @foreach ($percentages as $key => $percentage)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $percentage['input1'] }}</td>
                                            <td>{{ $percentage['input2'] }}</td>
                                            <td>{{ $percentage['result'] }}%</td>
                                            <td>{{ $percentage['message'] }}</td>
                                            <td>{{ $percentage['creator']['name'] }}</td>
                                            <td>
                                                @include('percentage::partials.action')
                                            </td>
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
