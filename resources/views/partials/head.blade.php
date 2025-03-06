<!-- Meta Data -->
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> HashMicro Test - @yield('title') </title>

<!-- Favicon -->
<link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon">

<!-- Choices JS -->
<script src="{{ url('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

<!-- Main Theme Js -->
<script src="{{ url('assets/js/main.js') }}"></script>

<!-- Bootstrap Css -->
<link id="style" href="{{ url('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Style Css -->
<link href="{{ url('assets/css/styles.min.css') }}" rel="stylesheet">

<!-- Icons Css -->
<link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">

<!-- Node Waves Css -->
<link href="{{ url('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

<!-- Simplebar Css -->
<link href="{{ url('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

<!-- Color Picker Css -->
<link rel="stylesheet" href="{{ url('assets/libs/flatpickr/flatpickr.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

<!-- Choices Css -->
<link rel="stylesheet" href="{{ url('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

<!-- Jsvector Maps -->
<link rel="stylesheet" href="{{ url('assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

<link rel="stylesheet" href="{{ url('css/sidebar-dark.css') }}">

@yield('css')
