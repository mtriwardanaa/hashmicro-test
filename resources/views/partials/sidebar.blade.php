<div class="main-sidebar" id="sidebar-scroll">

    <!-- Start::nav -->
    <nav class="main-menu-container nav nav-pills flex-column sub-open">
        <div class="slide-left" id="slide-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
            </svg>
        </div>
        <ul class="main-menu">
            <!-- Start::slide__category -->
            <li class="slide__category"><span class="category-name">Main</span></li>
            <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide">
                <a href="{{ route('dashboard') }}" class="side-menu__item @yield('dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg>
                    <span class="side-menu__label">Dashboard</span>
                </a>
            </li>
            <!-- End::slide -->

            <!-- Start::slide__category -->
            <li class="slide__category"><span class="category-name">Data</span></li>
            <!-- End::slide__category -->

            <!-- Start::slide -->
            <li class="slide has-sub @yield('persentase')">
                <a href="javascript:void(0);" class="side-menu__item @yield('persentase-child')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"></path>
                        <path
                            d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                        </path>
                    </svg>
                    <span class="side-menu__label">Persentase</span>
                    @if (session('persentase') > 0)
                        <span class="badge bg-success ms-auto menu-badge bounce"
                            style="margin-right: 15px">{{ session('persentase') }}</span>
                    @endif
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1 @yield('persentase-child')">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0);">Persentase</a>
                    </li>
                    <li class="slide @yield('persentase-list')">
                        <a href="{{ route('percentage.index') }}" class="side-menu__item @yield('persentase-list')">List</a>
                    </li>
                    <li class="slide @yield('persentase-tambah')">
                        <a href="{{ route('percentage.create') }}" class="side-menu__item @yield('persentase-tambah')">Tambah</a>
                    </li>
                </ul>
            </li>
            <!-- End::slide -->

            <!-- Start::slide -->
            <li class="slide has-sub @yield('user')">
                <a href="javascript:void(0);" class="side-menu__item @yield('user-child')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
                            opacity=".3"></path>
                        <path
                            d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z">
                        </path>
                    </svg>
                    <span class="side-menu__label">User</span>
                    @if (session('user') > 0)
                        <span class="badge bg-info ms-auto menu-badge bounce"
                            style="margin-right: 15px">{{ session('user') }}</span>
                    @endif
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1 @yield('user-child')">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0);">User</a>
                    </li>
                    <li class="slide @yield('user-list')">
                        <a href="{{ route('user.index') }}" class="side-menu__item @yield('user-list')">List</a>
                    </li>
                </ul>
            </li>
            <!-- End::slide -->
        </ul>
        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
            </svg></div>
    </nav>
    <!-- End::nav -->

</div>
