<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow"><i class="las la-angle-double-up"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

<!-- Popper JS -->
<script src="{{ url('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Defaultmenu JS -->
<script src="{{ url('assets/js/defaultmenu.min.js') }}"></script>

<!-- Node Waves JS-->
<script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>

<!-- Sticky JS -->
<script src="{{ url('assets/js/sticky.js') }}"></script>

<!-- Simplebar JS -->
<script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ url('assets/js/simplebar.js') }}"></script>

<!-- Color Picker JS -->
<script src="{{ url('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>


<!-- Apex Charts JS -->
{{-- <script src="{{ url('assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

<!-- JSVector Maps JS -->
<script src="{{ url('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

<!-- JSVector Maps MapsJS -->
<script src="{{ url('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ url('assets/js/us-merc-en.js') }}"></script>

<!-- Chartjs Chart JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).on('click', '.btn-delete', function() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-danger",
                cancelButton: "btn btn-info"
            },
            buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).data('link');
            }
        });
    });
</script>

@yield('script')
