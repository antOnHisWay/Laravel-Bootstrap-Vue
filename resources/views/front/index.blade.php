<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('/theme/images/favicon.ico') }}">

    <!-- Start CSS -->
    @yield('style')
    <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('theme/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('theme/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>
<body>

<div id="app">
    <router-view></router-view>
</div>

<script src="{{ asset('theme/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/js/modernizr.min.js') }}"></script>
<script src="{{ asset('theme/js/detect.js') }}"></script>
<script src="{{ asset('theme/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/js/core.js') }}"></script>

<!-- End JS -->
<script src="{{ url('js/app.js') }}"></script>
</body>
</html>