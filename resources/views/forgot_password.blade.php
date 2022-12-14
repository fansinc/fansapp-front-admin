<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
body{
    background: black!important;
}
.bg {
  background-color: black !important;
  color: white!important;
}


.form-control {
    border: 1px solid rgb(32, 29, 29)!important;
}
</style>
    <title>Fansinc Admin</title>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fansinc Admin') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    {{-- <link rel="icon" href="{{ asset('assets/images/Fans Inc Logo.png') }}" type="image/png" sizes="96x96"> --}}
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->

    {{-- <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <style>
        .login-block {
background: none!important;


        }
    </style>
</head>
<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->


                            <div class="text-center" >
                                {{-- <h3 class="text-white">Ecommerce Admin</h3> --}}


                            </div>
                            <div class="auth-box card">
                                {{-- <a class="navbar-brand mt-4 text-center" href="#"><img src="{{  asset('files/assets/images/ss_logo.png') }}"/></a> --}}
                                <form action="{{ route('reset_password_first') }}" method="post" enctype="multipart/form-data">
                                    {{-- {{ route('reset_password_first') }} --}}
                                    @csrf

                                <div class="card-block">
                                    @if(session('error') !== null)
                                    <div class='alert alert-danger'>
                                        {{ session('error') }}
                                    </div>
                                @endif

                                @if(session('success') !== null)
                                <div class='alert alert-success'>
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('errors') !== null)
                            @foreach(session('errors') as $k =>$v)
                                <div class='alert alert-danger'>
                                    {{ $v[0] }}
                                </div>
                            @endforeach
                        @endif
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Forgot Password</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input id="email" type="email"
                                        class="form-control"
                                        name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus placeholder="Enter Your Email Address">
                                        <span class="form-bar"></span>
                                    </div>

                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg btn-block waves-effect waves-light text-center m-b-20">Reset Password</button>
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Thank you.</p>
                                            <p class="text-inverse text-left"><a href="index-1.htm"><b class="f-w-600">Back to website</b></a></p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="..\files\assets\images\auth\Logo-small-bottom.png" alt="small-logo.png">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/modernizr/js/css-scrollbars.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('bower_components/i18next/js/i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
