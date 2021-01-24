<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('asset/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('asset/assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('asset/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/assets/css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('asset/assets/css/demo.css') }}" rel="stylesheet" />
</head>

<body>

    @guest
    <div class="wrapper">
        @yield('content')
    </div>

    @endguest
    @auth
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('asset/assets/js/plugins/chartist.min.js') }}"></script>

    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.navbar')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                        @yield('content')
                    </div>
                </div>
            </div>
            <footer class="footer">
                @include('layouts.footer')
            </footer>
        </div>
    </div>
    @endauth
</body>
<!-- sweetalert -->
<!--   Core JS Files   -->
<script src="{{ asset('asset/assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('asset/assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('asset/assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('asset/assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('asset/assets/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('asset/assets/js/demo.js') }}"></script>

</html>
