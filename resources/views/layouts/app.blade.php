<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png') }}">

    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />
    <link href="{{ asset('css/all.css') }} " rel="stylesheet">

    <!-- core css -->
    <link href="{{ asset('css/ei-icon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('vendors/datatables/media/css/jquery.dataTables.css') }}" />
</head>
<body>
    <div class="app">
            @if (Auth::check())
                @include('layouts.inc.sidebar')
                <div class="page-container">
                    @include('layouts.inc.navbar')
                    @include('layouts.inc.profilebar')
                    @yield('content')
                </div>
            @else
                @yield('content')
            @endif
    </div>
</body>
<!-- build:js assets/js/vendor.js -->
    <!-- plugins js -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/PACE/pace.min.js') }}"></script>
    <script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <!-- page plugins js -->
    <script src="{{ asset('vendors/datatables/media/js/jquery.dataTables.js') }}"></script>

    <!-- page js -->
    <script src="{{ asset('js/table/data-table.js') }}"></script>
    <!-- core js -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/ui-elements/notification.js') }}"></script>
    <script src="{{ asset('vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/forms/form-wizard.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</html>
