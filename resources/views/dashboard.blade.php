@extends('layouts.base')

@section('title', 'Dashboard')
@section('dashboard', 'active')

@section('left-title')
    <div>
        <h4 class="mb-0">Hi, selamat datang {{ Auth::user()->name }}!</h4>
        <p id="install" class="mb-0 text-muted">HashMicro - Test Apps</p>
    </div>
@endsection

@section('right-title')
    <div class="d-flex my-xl-auto right-content align-items-center">
        <div class="pe-1 mb-xl-0 btn-allow">
            <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
        </div>
        <div class="pe-1 mb-xl-0 btn-notif">
            <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="{{ url('assets/js/index.js') }}"></script> --}}
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div>
                        <h6 class="mb-3 fs-12 text-fixed-white">TOTAL USER</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div>
                                <h4 class="fs-20 fw-bold mb-1 text-fixed-white">{{$data['total_user']}}</h4>
                            </div>
                            <span class="float-end my-auto ms-auto">
                            </span>
                        </div>
                    </div>
                </div>
                <div id="compositeline"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div>
                        <h6 class="mb-3 fs-12 text-fixed-white">TOTAL CHECK</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div>
                                <h4 class="fs-20 fw-bold mb-1 text-fixed-white">{{$data['total_check']}}</h4>
                            </div>
                            <span class="float-end my-auto ms-auto">
                            </span>
                        </div>
                    </div>
                </div>
                <div id="compositeline2"></div>
            </div>
        </div>
    </div>
@endsection
