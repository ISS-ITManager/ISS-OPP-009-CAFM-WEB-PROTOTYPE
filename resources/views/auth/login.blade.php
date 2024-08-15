<!doctype html>
<html
    lang="en"
    class="light-style layout-wide customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="/template/assets/"
    data-template="vertical-menu-template">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>{{ config('app.name') }} | Login</title>
        <meta name="description" content="" />
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
        <!-- Vendor -->
        <link rel="stylesheet" href="/template/assets/vendor/libs/@form-validation/form-validation.css" />
        <!-- Page CSS -->
        <!-- Page -->
        <link rel="stylesheet" href="/template/assets/vendor/css/pages/page-auth.css" />
        <!-- Helpers -->
        <script src="/template/assets/vendor/js/helpers.js"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="/template/assets/vendor/js/template-customizer.js"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="/template/assets/js/config.js"></script>
        <style>
            .cover{
                background-image: url('/images/bg.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <!-- Content -->
        <div class="authentication-wrapper authentication-cover" >
            <div class="authentication-inner row m-0" >
                <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5 cover"></div>
                <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                    <div class="w-px-400 mx-auto">
                        <center>
                            {{-- <img src="/assets/images/gssg.jpg" alt="" class="w-50"> --}}
                            <i class="bx bxs-building-house text-primary"
                                style="font-size: 3em"
                            ></i>
                            <h1 class="text-primary mt-2">CAFM</h1>
                            <h4 class="text-dark mt-2">Computer Aided Facility Management</h4>
                        </center>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value = "{{ old('email') }}"
                                    placeholder="Enter your email"
                                    autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="/forgot-password">
                                    <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <a class="btn btn-primary d-grid w-100" href="/dashboard">Sign in</a>
                            <a class="btn btn-danger mt-3 w-100" target="_blank" href="https://app.uizard.io/p/0a0a7627">
                                <i class='bx bx-mobile-alt me-2'></i>View Mobile App
                            </a>

                    </div>
                </div>
                <!-- /Login -->
            </div>
        </div>
        <!-- / Content -->
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
        <!-- endbuild -->
        <!-- Vendors JS -->
        <script src="/template/assets/vendor/libs/@form-validation/popular.js"></script>
        <script src="/template/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
        <script src="/template/assets/vendor/libs/@form-validation/auto-focus.js"></script>
        <!-- Main JS -->
        <script src="/template/assets/js/main.js"></script>
        <!-- Page JS -->
        <script src="/template/assets/js/pages-auth.js"></script>
        <script src="/js/trademark.js"></script>
    </body>
</html>