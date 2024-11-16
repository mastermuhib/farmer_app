
<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head><base href="../../../">
        <meta charset="utf-8" />
        <title>Farmer App</title>
        <meta name="description" content="Login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="{{URL::asset('assets')}}/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets')}}/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets')}}/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets')}}/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets')}}/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets')}}/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="{{ URL::asset('assets') }}/images/logo_farmer.png" />
        <style type="text/css">
            .field-icon {
                cursor: pointer;
                float: right;
                margin-top: -45px;
                position: relative;
                z-index: 2;
                margin-right: 15px;
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid" style="background: #F3F5F9;" id="kt_login">
                <!--begin::Aside-->
                <div class="login-aside d-flex flex-row-auto px-lg-0 px-5 pb-sm-40 pb-lg-40 flex-grow-1" style="background: white;">
                    <!--begin::Aside Container-->
                    <div class="d-flex flex-row-fluid flex-column mt-lg-5 mb-lg-0 pb-lg-0 mb-20 pb-0 mt-0 pt-15 pt-lg-35">
                        <!--begin::Aside header-->
                        <a href="#" class="text-center mt-10 mb-10">
                            <img src="{{URL::asset('assets')}}/images/logo_farmer.png" class="max-h-200px" alt="" />
                        </a>
                        <!--end::Aside header-->
                        <!--begin::Aside title-->
                        <!--end::Aside title-->
                    </div>
                    <!--end::Aside Container-->
                </div>
                <!--begin::Aside-->
                <!--begin::Content-->
                <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 ml-auto mr-auto">
                    <!--begin::Content body-->
                    <div class="d-flex flex-column-fluid flex-center mt-6 mt-lg-0">
                        <!--begin::Signin-->
                        <!--end::Login Header-->
                        <!--begin::Login Sign in form-->
                        <div class="login-form login-signin">
                            <div class="text-left mb-10 mb-lg-20">
                                <h2 class="font-weight-bold text-dark-75">Login</h2>
                                
                            </div>
                            <!--begin::Form-->
                            @if ($errors->any())
                                <div class="alert alert-danger form-group">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="form" novalidate="novalidate" method="post" action="/login">@csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="hidden" name="firebase_website" id="firebase_website" value="">
                                    <input class="form-control form-control-md h-auto text-dark placeholder-white opacity-70 bg-white border-0 py-4 px-8 mb-3" type="text" placeholder="Email" name="username" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input class="form-control form-control-md h-auto text-dark placeholder-white opacity-70 bg-white border-0 py-4 px-8 mb-3" type="password" id="inp_c_password" placeholder="Password" name="password" />
                                    <span toggle="#inp_c_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                                    
                                </div>
                                <div class="form-group text-left mt-10">
                                    <button type="submit" class="btn btn-success font-weight-bold px-15 py-3">Sign In</button>
                                </div>
                            </form>
                            <!--end::Login Sign in form-->
                        </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                        
                        <!--end::Forgot-->
                    </div>
                    <!--end::Content body-->
                    <!--begin::Content footer-->
                    <div class="d-flex justify-content-lg-start justify-content-center flex-column-fluid align-items-end pb-2 pt-lg-0">
                        
                    </div>
                    <!--end::Content footer-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->
        <script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="{{URL::asset('assets')}}/plugins/global/plugins.bundle.js"></script>
        <script src="{{URL::asset('assets')}}/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="{{URL::asset('assets')}}/js/scripts.bundle.js"></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <script src="{{URL::asset('assets')}}/js/pages/custom/login/login.js"></script>
        <!--end::Page Scripts-->
        <script type="text/javascript">
            //alert("test");
            $(".toggle-password").click(function() {
              $(this).toggleClass("fa-eye fa-eye-slash");
              var input = $($(this).attr("toggle"));
              if (input.attr("type") == "password") {
                input.attr("type", "text");
              } else {
                input.attr("type", "password");
              }
            });
            function show_toast(message, type) {
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };
                if (type == 1) {
                    toastr.success(message, "Notification");
                } else {
                    toastr.error(message, "Error Notification")
                }

            }
        </script>
    </body>
    <!--end::Body-->
</html>