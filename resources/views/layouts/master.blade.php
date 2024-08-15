<!doctype html>
<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="/template/assets/"
    data-template="vertical-menu-template">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>{{ config('app.name') }} | {{$page['title']}}</title>
        <meta name="description" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/images/logo-sm.png" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet" />
        <!-- Icons -->
        <link rel="stylesheet" href="/template/assets/vendor/fonts/boxicons.css" />
        <link rel="stylesheet" href="/template/assets/vendor/fonts/fontawesome.css" />
        <link rel="stylesheet" href="/template/assets/vendor/fonts/flag-icons.css" />
        <!-- Core CSS -->
        <link rel="stylesheet" href="/template/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="/template/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="/template/assets/css/demo.css" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="/template/assets/vendor/libs/typeahead-js/typeahead.css" />
        <link rel="stylesheet" href="/template/assets/vendor/libs/select2/select2.css" />
        {{-- datatable --}}
        <link rel="stylesheet" href="/template/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
        <link rel="stylesheet" href="/template/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
        {{-- Sweetalert --}}
        <link rel="stylesheet" href="/template/assets/vendor/libs/sweetalert2/sweetalert2.css" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"
            />
        {{-- Customized CSS --}}
        @yield('page_css')
        <!-- Page CSS -->
        <!-- Helpers -->
        <script src="/template/assets/vendor/js/helpers.js"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="/template/assets/vendor/js/template-customizer.js"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="/template/assets/js/config.js"></script>
    </head>
    <body>

        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                
                {{-- Sidebar --}}
                @include('layouts.sidebar')	
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    @include('layouts.header')	
                    <!-- / Navbar -->
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <!-- Layout Demo -->
                            @include('layouts.crumb')
                            @yield('content')
                            <!--/ Layout Demo -->
                        </div>
                        <!-- / Content -->
                        <!-- Footer -->
                        @include('layouts.footer')
                        <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
            <div class="layout-overlay layout-menu-toggle"></div>
            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="/template/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="/template/assets/vendor/libs/popper/popper.js"></script>
        <script src="/template/assets/vendor/js/bootstrap.js"></script>
        <script src="/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="/template/assets/vendor/libs/hammer/hammer.js"></script>
        <script src="/template/assets/vendor/libs/i18n/i18n.js"></script>
        <script src="/template/assets/vendor/libs/typeahead-js/typeahead.js"></script>
        <script src="/template/assets/vendor/js/menu.js"></script>
        <script src="/template/assets/vendor/libs/select2/select2.js"></script>
        <script src="/template/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
        <script src="/template/assets/vendor/libs/apex-charts/apexcharts.js"></script>
        {{-- pusher --}}
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
   
        <!-- Main JS -->
        <script src="/template/assets/js/main.js"></script>
        <!-- Page JS -->
        <script src="/template/assets/js/form-layouts.js"></script>
        {{-- Datatable --}}
        <script src="/template/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
        <script src="
        https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js
        "></script>
        {{-- Custom JS --}}
        @yield('page_script')
        <!-- Page JS -->
    </body>
</html>
