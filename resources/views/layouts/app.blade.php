<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('partials.app.styles')
    @include('vendors.toastr')
    @livewireStyles
    @livewireScripts
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @stack('extended-css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <livewire:partials.header>
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->
        <livewire:partials.side-bar>
            <!-- END: Main Menu-->

            <!-- BEGIN: Content-->
            <div class="app-content content ">
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <x-bread-crumb-component />
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END: Content-->

            <livewire:partials.footer>

                @include('partials.app.footer')
                @include('partials.app.scripts')
                @stack('extended-js')
</body>
<!-- END: Body-->

</html>
