<!doctype html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="/template/assets/"
    data-template="vertical-menu-template"
>
<head>
    <meta charset="utf-8" />
    <meta  name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name') }} | {{$page['title']}}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/ehsan.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="/template/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/template/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/template/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/template/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/template/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/template/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/template/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="/template/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="/template/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
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

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar')
            <div class="layout-page">
                @include('layouts.header')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">eCommerce / </span> Referrals</h4> --}}
                        @include('layouts.crumb')
                        @yield('content')
                    </div>
                    @include('layouts.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>

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
    
    <script src="/template/assets/js/form-layouts.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/template/assets/vendor/libs/moment/moment.js"></script>
    <script src="/template/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    
    <script src="/template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    @yield('page_script')
    <!-- Main JS -->
    {{-- <script src="template/assets/js/main.js"></script> --}}

    <!-- Page JS -->
    <script src="template/assets/js/app-ecommerce-referral.js"></script>
</body>
</html>
