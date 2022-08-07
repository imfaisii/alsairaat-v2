<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('partials.guest.styles')
    @include('vendors.toastr')
    @livewireStyles
    @livewireScripts
    @stack('extended-css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    @include('partials.guest.scripts')
    @stack('extended-js')
</body>
<!-- END: Body-->

</html>
