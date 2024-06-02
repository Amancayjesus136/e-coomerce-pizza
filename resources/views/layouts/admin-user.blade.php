<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="gradient-4" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets2/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets2/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets2/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets2/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets2/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets2/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets2/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

@include('layouts.menu-user')
@yield('content')
@include('layouts.footer-user')

 <!-- JAVASCRIPT -->
 <script src="{{ asset('assets2/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets2/libs/simplebar/simplebar.min.js') }}"></script>
 <script src="{{ asset('assets2/libs/node-waves/waves.min.js') }}"></script>
 <script src="{{ asset('assets2/libs/feather-icons/feather.min.js') }}"></script>
 <script src="a{{ asset('ssets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
 <script src="{{ asset('assets2/js/plugins.js') }}"></script>

 <!-- apexcharts -->
 <script src="{{ asset('assets2/libs/apexcharts/apexcharts.min.js') }}"></script>

 <!-- Vector map-->
 <script src="{{ asset('assets2/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
 <script src="{{ asset('assets2/libs/jsvectormap/maps/world-merc.js') }}"></script>

 <!--Swiper slider js-->
 <script src="{{ asset('assets2/libs/swiper/swiper-bundle.min.js') }}"></script>

 <!-- Dashboard init -->
 <script src="{{ asset('assets2/js/pages/dashboard-ecommerce.init.js') }}"></script>

 <!-- App js -->
 <script src="{{ asset('assets2/js/app.js') }}"></script>
</body>

</html>
