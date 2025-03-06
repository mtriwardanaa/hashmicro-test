<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">

<head>
    @include('partials.head')
</head>

<body>
    <!-- Start Switcher -->
    {{-- @include('partials.switcher') --}}
    <!-- End Switcher -->

    <div id="load"></div>
    <!-- Loader -->
    <div id="loader">
        <img src="{{ url('assets/images/media/loader.svg') }}" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        @include('partials.header')
        <!-- /app-header -->

        <!-- Start::Off-canvas sidebar-->
        {{-- @include('layouts.canvas_sidebar') --}}
        <!-- End::Off-canvas sidebar-->

        <!-- Message Modal -->
        {{-- @include('modals.message_modal') --}}
        <!--End modal -->

        <!--Video Modal -->
        {{-- @include('modals.video_modal') --}}
        <!--End modal -->

        <!-- Audio Modal -->
        {{-- @include('modals.audio_modal') --}}
        <!--End modal -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="{{ route('dashboard') }}" class="header-logo fs-20 fw-bold">
                    <span class="desktop-logo">Admin Dashboard</span>
                    <span class="toggle-logo">AD</span>
                    <span class="desktop-white">Admin Dashboard</span>
                    <span class="toggle-white">AD</span>
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            @include('partials.sidebar')
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                @include('partials.title')
                <!-- End Page Header -->

                @include('partials.alert')

                @yield('content')
            </div>
        </div>
        <!-- End::app-content -->

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->
    </div>

    @include('partials.script')

</body>

</html>
