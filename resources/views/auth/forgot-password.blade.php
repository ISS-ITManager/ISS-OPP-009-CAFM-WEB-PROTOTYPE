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
                background-image: url('/assets/images/background.png');
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
                            <img src="/assets/images/logo.png" alt="" class="w-50">
                            <h4 class="text-primary mb-4">CASE MANAGEMENT SYSTEM</h4>
                        </center>
                        <h5 class="mb-2">Forgot Password? 🔒</h5>
                        <p class="mb-2">Enter your email and we'll send you instructions to reset your password</p>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            autofocus />
                        </div>
                        <a href="/reset-password" class="btn btn-primary d-grid w-100">Send Reset Link</a>
                        <div class="text-center mt-3">
                            <a href="/" class="d-flex align-items-center justify-content-center">
                              <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                              Back to login
                            </a>
                        </div>
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