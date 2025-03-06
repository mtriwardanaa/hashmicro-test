@extends('layouts.base')

@section('title', 'Persentase')
@section('persentase', 'open')
@section('persentase-child', 'active')
@section('persentase-tambah', 'active')

@section('left-title')
    <div class="my-auto">
        <h5 class="page-title fs-21 mb-1">Persentase</h5>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
@endsection

@section('script')
    <!-- Select2 Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ url('js/persentase.create.js') }}"></script>

@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <form action="{{ route('percentage.update', $percentage['id']) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row gy-3 mb-4">
                            <div class="col-xl-3">
                                <div class="col-xl-12 mb-4">
                                    <label for="input1remark" class="form-label">
                                        Input 1
                                    </label>
                                    <input type="text" class="form-control @error('input1') is-invalid @enderror"
                                        id="input1remark" aria-describedby="input1help" placeholder="Enter here"
                                        name="input1" value="{{ $percentage['input1'] }}" required>
                                    @error('input1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-xl-12 mb-4">
                                    <label for="input2remark" class="form-label">
                                        Input 2
                                    </label>
                                    <input type="text" class="form-control @error('input2') is-invalid @enderror"
                                        id="input2remark" aria-describedby="input2help" placeholder="Enter here"
                                        name="input2" value="{{ $percentage['input2'] }}" required>
                                    @error('input1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-3">
                                @if (isset($percentage['result']))
                                    <div class="col-xl-12 mb-4">
                                        <label for="inputremark" class="form-label">
                                            Hasil
                                        </label>
                                        <input type="text" class="form-control"
                                        id="inputremark" aria-describedby="resulthelp" placeholder=""
                                        name="result" value="{{ $percentage['result'] }}%" disabled>
                                    </div>
                                @endif
                                @if (isset($percentage['result']))
                                    <div class="col-xl-12 mb-4">
                                        <label for="inputremark" class="form-label">
                                            Pesan
                                        </label>
                                        <input type="text" class="form-control"
                                        id="inputremark" aria-describedby="messagehelp" placeholder="-"
                                        name="message" value="{{ $percentage['message'] }}" disabled>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
