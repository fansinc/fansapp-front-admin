<?php
     use Illuminate\Support\Collection;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fansinc</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" sizes="16x16 32x32 64x64" href="{{ asset('files/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- datatable -->
    <link href="{{ asset('assets\pages\jquery.filer\css\jquery.filer.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets\pages\jquery.filer\css\themes\jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet">
  <!-- Select 2 css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css')}}">
    <!-- Select 2 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/select2/css/select2.min.css') }}">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/material-design/css/material-design-iconic-font.min.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/prism/prism.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pcoded-horizontal.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->

<style>
/*
@media only screen and (max-width: 992px){
    .header-navbar .navbar-container .nav-left, .header-navbar .navbar-wrapper .navbar-container .nav-right {
  display: revert;
  margin-top: -48px;
} */
body {

  font-family: Avenir Next Condensed !important;
}
/* menu color changes */
.pcoded .pcoded-navbar[active-item-theme="theme4"] .pcoded-item li .pcoded-submenu li.active > a, .pcoded .pcoded-navbar[active-item-theme="theme4"] .pcoded-item li .pcoded-submenu li:hover > a {
  color: black !important;
}

/*end menu color changes */
/* menu color changes */
@media (max-width: 991px) {
    .header-navbar .navbar-container .nav-left, .header-navbar .navbar-wrapper .navbar-container .nav-right {
  display: initial!important;
  margin-top: -3rem;
}
.pcoded .pcoded-navbar .pcoded-item {
  /* position: static; */
  margin-top: 3rem;
}
.pagination{
    display:none!important;
}
/* menu align center  */
.pcoded .pcoded-navbar .pcoded-item {

  margin-left: 0px!important;
}

}

.pcoded .pcoded-header[header-theme="theme6"] {
  background: black;
}
.pcoded .pcoded-header .navbar-logo[logo-theme="theme1"] {
  background-color: black;
}
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item > li.pcoded-trigger >a{
    background: white!important;
    color: black!important;
}
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item > li.active > a {
  color: black;
}
.pcoded .pcoded-navbar[active-item-theme="theme4"] .pcoded-item li.pcoded-hasmenu:hover > a{
    color:black!important;
}
/* menu color chagnges hidden */

/* .pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item > li.active > a {
  background: black !important;
  color: #FFF;
}
.pcoded[nav-type="st6"] .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item.pcoded-left-item > li > a > .pcoded-micon i {
  color: #fff;
}

.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item > li > a {
  color: #ffff;
}
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item > li.pcoded-trigger >a{
    background: black!important;
    color: white!important;
}
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item li.pcoded-hasmenu .pcoded-submenu li:hover > a {
  background: black;
  color: white!important;
}
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item li.pcoded-hasmenu .pcoded-submenu li > a {
  background: black;
  color: white!important;
}
.pcoded .pcoded-navbar[navbar-theme="themelight1"] .pcoded-item li.pcoded-hasmenu .pcoded-submenu {
  background: black;
  color: white!important;
}

.jFiler-theme-default .jFiler-input-button {
  background-color: black;
  background-image: none;
  color: #fff;
} */
/* End of menu color changes */

/* menu alignment changes */
body.horizontal-icon .pcoded .pcoded-navbar .pcoded-item > li.pcoded-hasmenu > a, body.horizontal-icon-fixed .pcoded .pcoded-navbar .pcoded-item > li.pcoded-hasmenu > a {
  line-height: 2.5;
}
/* end of menu alignment changes */
/* selcte 2 box color change  */
button.dt-button, div.dt-button, a.dt-button {
    background-color: black!important;
    border: 1px solid black!important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
  background-color: black;
  color: #fff;
  padding: 8px 30px 8px 20px;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: black;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: black;
  border: 1px solid black;
  padding: 5px 15px;
  color: #fff;
}
.btn{
    background: black;
    color: white;
}
.icofont{
    color: black;
}
/* end of btn selcte 2 box color change  */

#basic-btn_info{
    display: none;
}
.selector-toggle {
  position: relative;
  display: none;
}
    .pcoded .pcoded-navbar .pcoded-item > li > a > .pcoded-micon {
  font-size: 16px;
  padding: 4px;
  margin-right: 10px;
  width: 23px;
  display: inline-block;
  height: 26px;
  text-align: center;
}
body.horizontal-icon .pcoded .pcoded-navbar .pcoded-item > li > a > .pcoded-micon, body.horizontal-icon-fixed .pcoded .pcoded-navbar .pcoded-item > li > a > .pcoded-micon {
  display: initial!important;
  text-align: center;
}
body.horizontal-icon .pcoded .main-body, body.horizontal-icon-fixed .pcoded .main-body {
  margin-top: 19px!important;
}
body.horizontal-icon .pcoded .pcoded-navbar, body.horizontal-icon-fixed .pcoded .pcoded-navbar {
  /* height: 50px!important; */
}
.header-navbar .navbar-wrapper .navbar-logo .mobile-menu {
  position: absolute;
  right: 21rem!important;
  top: calc(50% - 20px);
  border-radius: 50%;
  padding: 5px 9px;
  font-size: 20px;
}
.img-fluid {
  max-width: 100%;
  height: 29px!important;
}
</style>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<!-- Menu horizontal fixed layout -->

<body class="horizontal-icon-fixed">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">

        <div class="pcoded-container">
            <!-- Menu header start -->
            @if(collect(session('roles'))->contains('Administrator'))
            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets\images\Fans Inc Logo WO.png')}}" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        {{-- <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span> --}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                {{-- <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a> --}}
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span> --}}
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user"> {{ ucfirst(session('username')) }}</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        {{-- <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <img src="{{asset('assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image"> --}}
                                        <span> {{ ucfirst(session('username')) }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        {{-- <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('profile.index') }}">
                                                <i class="feather icon-user {{ (request()->is('show_profiles')) ? 'active' : '' }}"></i> Profile
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('logout') }}">
                                                <i class="feather icon-log-out {{ (request()->is('logout')) ? 'active' : '' }}"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @elseif(collect(session('roles'))->contains('Player'))
            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets\images\Fans Inc Logo WO.png')}}" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        {{-- <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span> --}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                {{-- <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a> --}}
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span> --}}
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user"> {{ ucfirst(session('username')) }}</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        {{-- <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <img src="{{asset('assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image"> --}}
                                        <span> {{ ucfirst(session('username')) }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="{{ route('profile.index') }}">
                                                <i class="feather icon-user {{ (request()->is('show_profiles')) ? 'active' : '' }}"></i> Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('logout') }}">
                                                <i class="feather icon-log-out {{ (request()->is('logout')) ? 'active' : '' }}"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @elseif(collect(session('roles'))->contains('Fan'))
            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets\images\Fans Inc Logo WO.png')}}" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        {{-- <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span> --}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                {{-- <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a> --}}
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span> --}}
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user"> {{ ucfirst(session('username')) }}</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        {{-- <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span> --}}
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <img src="{{asset('assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image"> --}}
                                        <span> {{ ucfirst(session('username')) }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="{{ route('profile.index') }}">
                                                <i class="feather icon-user {{ (request()->is('show_profiles')) ? 'active' : '' }}"></i> Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('logout') }}">
                                                <i class="feather icon-log-out {{ (request()->is('logout')) ? 'active' : '' }}"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
@endif
            <!-- Menu header end -->
            <div class="">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item" style="  margin-left: 16rem;
                        ">
                            @if(collect(session('roles'))->contains('Administrator'))
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                    <span class="pcoded-mtext">Users</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <?php


                                    /**
                                     * List values from collection. Unlike $collection->lists('key'), this function allows using multiple keys.
                                     *
                                     * In newer Laravel versions things like that can be done with collection macros, but not in 5.0.
                                     *
                                     * @param Collection $collection
                                     * @param array|string $properties
                                     * @param string $id
                                     * @return array
                                     */



                                    function checkpermissionexist($permissionarray)
                                    {

                                        $result = 0;

                                        $coll = new collection(session('permissions'));

                                        // $permarr = ['List users','List roles','List permissions'];

                                        // retun $coll->contains('List users','List roles','List permissions');

                                        foreach ($coll as $item) {

                                            // echo $item;

                                            if (in_array($item, $permissionarray)) {

                                                $result++;
                                            }
                                        }

                                        return $result;
                                    }


                                    ?>
@if(checkpermissionexist(['List users','List roles','List permissions']) > 0)

                                    <li class=" {{ (request()->is('user_list')) ? 'active' : '' }}">
                                        @if(collect(session('permissions'))->contains('List users'))
                                        <a href="{{  route('user.index') }}">  <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">User</span>        <span class="pcoded-mcaret"></span>    </a>
@endif
                                    </li>
                                    <li class="{{ (request()->is('role_list')) ? 'active' : '' }}">
                                        @if(collect(session('permissions'))->contains('List roles'))

                                        <a href="{{ route('role.index') }}">  <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Role</span>        <span class="pcoded-mcaret"></span>    </a>
@endif
                                    </li>
                                    <li class="{{ (request()->is('permission_list')) ? 'active' : '' }}">
                                        @if(collect(session('permissions'))->contains('List permissions'))

                                        <a href="{{ route('permission.index') }}">  <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Permission</span>        <span class="pcoded-mcaret"></span>    </a>
@endif
                                    </li>
@endif
                                </ul>
                            </li>
@endif

{{-- @if(collect(session('permissions'))->contains('List purchase')) --}}
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
                                    <span class="pcoded-mtext">Purchase</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">



                                    <li class="{{ (request()->is('purchase_list')) ? 'active' : '' }}"">    <a href="{{ route('purchase.index') }}">  <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Purchase Tracker</span>        <span class="pcoded-mcaret"></span>    </a></li>
                                    {{-- <li class="">    <a href="navbar-light.htm">  <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Role</span>        <span class="pcoded-mcaret"></span>    </a></li> --}}
                                    {{-- <li class="">    <a href="navbar-light.htm">  <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Permission</span>        <span class="pcoded-mcaret"></span>    </a></li> --}}

                                </ul>
                            </li>
                            {{-- @endif --}}
                            {{-- @if(collect(session('permissions'))->contains('List news')) --}}
                            <li class="{{ (request()->is('news_list')) ? 'active' : '' }}">    <a href="{{ route('news.index') }}">  <span class="pcoded-micon"><i class="zmdi zmdi-receipt"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">News</span>        <span class="pcoded-mcaret"></span>    </a></li>
{{-- @endif --}}
{{-- @if(collect(session('permissions'))->contains('List experience')) --}}
                            <li class="{{ (request()->is('experience_list')) ? 'active' : '' }}">    <a href="{{ route('experience.index') }}">  <span class="pcoded-micon"><i class="feather icon-navigation-2"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Experience</span>        <span class="pcoded-mcaret"></span>    </a></li>
{{-- @endif --}}
{{-- @if(collect(session('permissions'))->contains('List myweek')) --}}
                            <li class="{{ (request()->is('myweek_list')) ? 'active' : '' }}">    <a href="{{ route('myweek.index') }}">  <span class="pcoded-micon"><i class="feather icon-calendar"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">My Week</span>        <span class="pcoded-mcaret"></span>    </a></li>
{{-- @endif --}}


                            {{-- <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                    <span class="pcoded-mtext">UI Element</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext">Basic Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="alert.htm" data-i18n="nav.basic-components.alert">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Alert</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="breadcrumb.htm" data-i18n="nav.basic-components.breadcrumbs">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Breadcrumbs</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="button.htm" data-i18n="nav.basic-components.button">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Button</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="box-shadow.htm" data-i18n="nav.basic-components.box-shadow">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Box-Shadow</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="accordion.htm" data-i18n="nav.basic-components.collapse–accordion">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Accordion</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="generic-class.htm" data-i18n="nav.basic-components.generic-class">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Generic Class</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="tabs.htm" data-i18n="nav.basic-components.tabs">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tabs</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="color.htm" data-i18n="nav.basic-components.color">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Color</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="label-badge.htm" data-i18n="nav.basic-components.label-badge">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Label Badge</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="progress-bar.htm" data-i18n="nav.basic-components.progress-bar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Progress Bar</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="preloader.htm" data-i18n="nav.basic-components.pre-loader">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Pre-Loader</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="list.htm" data-i18n="nav.basic-components.list">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">List</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="tooltip.htm" data-i18n="nav.basic-components.tooltip-popover">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tooltip And Popover</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="typography.htm" data-i18n="nav.basic-components.typography">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Typography</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="other.htm" data-i18n="nav.basic-components.other">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Other</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.advance-components.main">
                                            <span class="pcoded-micon"><i class="ti-crown"></i></span>
                                            <span class="pcoded-mtext">Advance Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="draggable.htm" data-i18n="nav.advance-components.draggable">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Draggable</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="bs-grid.htm" data-i18n="nav.advance-components.grid-stack">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Grid Stack</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="light-box.htm" data-i18n="nav.advance-components.light-box">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Light Box</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="modal.htm" data-i18n="nav.advance-components.modal">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Modal</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                            <li class=" ">
                                                <a href="notification.htm" data-i18n="nav.advance-components.notifications">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Notifications</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="notify.htm" data-i18n="nav.advance-components.pnotify">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">PNOTIFY</span>
                                                    <span class="pcoded-badge label label-info">NEW</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="rating.htm" data-i18n="nav.advance-components.rating">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Rating</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="range-slider.htm" data-i18n="nav.advance-components.range-slider">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Range Slider</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="slider.htm" data-i18n="nav.advance-components.slider">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Slider</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="syntax-highlighter.htm" data-i18n="nav.advance-components.syntax-highlighter">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Syntax Highlighter</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="tour.htm" data-i18n="nav.advance-components.tour">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tour</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="treeview.htm" data-i18n="nav.advance-components.tree-view">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tree View</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="nestable.htm" data-i18n="nav.advance-components.nestable">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Nestable</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="toolbar.htm" data-i18n="nav.advance-components.toolbar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Toolbar</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="x-editable.htm" data-i18n="nav.advance-components.x-editable">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">X-Editable</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.extra-components.main">
                                            <span class="pcoded-micon"><i class="ti-gift"></i></span>
                                            <span class="pcoded-mtext">Extra Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="session-timeout.htm" data-i18n="nav.extra-components.session-timeout">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Session Timeout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="session-idle-timeout.htm" data-i18n="nav.extra-components.session-idle-timeout">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Session Idle Timeout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="offline.htm" data-i18n="nav.extra-components.offline">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Offline</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="animation.htm" data-i18n="nav.animations.main">
                                            <span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i></span>
                                            <span class="pcoded-mtext">Animations</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="sticky.htm" data-i18n="nav.sticky-notes.main">
                                            <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
                                            <span class="pcoded-mtext">Sticky Notes</span>
                                            <span class="pcoded-badge label label-danger">HOT</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.icons.main">
                                            <span class="pcoded-micon"><i class="ti-star"></i></span>
                                            <span class="pcoded-mtext">Icons</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="icon-font-awesome.htm" data-i18n="nav.icons.font-awesome">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Font Awesome</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-themify.htm" data-i18n="nav.icons.themify">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Themify</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-simple-line.htm" data-i18n="nav.icons.simple-line-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Simple Line Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-ion.htm" data-i18n="nav.icons.ion-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Ion Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-material-design.htm" data-i18n="nav.icons.material-design">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Material Design</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-icofonts.htm" data-i18n="nav.icons.ico-fonts">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Ico Fonts</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-weather.htm" data-i18n="nav.icons.weather-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Weather Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-typicons.htm" data-i18n="nav.icons.typicons">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Typicons</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-flags.htm" data-i18n="nav.icons.flags">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Flags</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                    <span class="pcoded-mtext">Forms</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.form-components.main">
                                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                            <span class="pcoded-mtext">Form Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="form-elements-component.htm" data-i18n="nav.form-components.form-components">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form Components</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form-elements-add-on.htm" data-i18n="nav.form-components.form-elements-add-on">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form-Elements-Add-On</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form-elements-advance.htm" data-i18n="nav.form-components.form-elements-advance">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form-Elements-Advance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form-validation.htm" data-i18n="nav.form-components.form-validation">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form Validation</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="form-picker.htm" data-i18n="nav.form-pickers.main">
                                            <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                            <span class="pcoded-mtext">Form Picker</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                    <li class=" ">
                                        <a href="form-select.htm" data-i18n="nav.form-select.main">
                                            <span class="pcoded-micon"><i class="ti-shortcode"></i></span>
                                            <span class="pcoded-mtext">Form Select</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-masking.htm" data-i18n="nav.form-masking.main">
                                            <span class="pcoded-micon"><i class="ti-write"></i></span>
                                            <span class="pcoded-mtext">Form Masking</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-wizard.htm" data-i18n="nav.form-wizard.main">
                                            <span class="pcoded-micon"><i class="ti-archive"></i></span>
                                            <span class="pcoded-mtext">Form Wizard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.ready-to-use.main">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext">Ready To Use</span>
                                            <span class="pcoded-badge label label-danger">HOT</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="ready-cloned-elements-form.htm" data-i18n="nav.ready-to-use.cloned-elements-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Cloned Elements Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-currency-form.htm" data-i18n="nav.ready-to-use.currency-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Currency Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-form-booking.htm" data-i18n="nav.ready-to-use.booking-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Booking Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-form-booking-multi-steps.htm" data-i18n="nav.ready-to-use.booking-multi-steps-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Booking Multi Steps Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-form-comment.htm" data-i18n="nav.ready-to-use.comment-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Comment Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-form-contact.htm" data-i18n="nav.ready-to-use.contact-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Contact Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-job-application-form.htm" data-i18n="nav.ready-to-use.job-application-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Job Application Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-js-addition-form.htm" data-i18n="nav.ready-to-use.jS-addition-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">JS Addition Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-login-form.htm" data-i18n="nav.ready-to-use.login-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Login Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-popup-modal-form.htm" target="_blank" data-i18n="nav.ready-to-use.popup-modal-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Popup Modal Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-registration-form.htm" data-i18n="nav.ready-to-use.registration-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Registration Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-review-form.htm" data-i18n="nav.ready-to-use.review-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Review Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-subscribe-form.htm" data-i18n="nav.ready-to-use.subscribe-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Subscribe Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-suggestion-form.htm" data-i18n="nav.ready-to-use.suggestion-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Suggestion Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="ready-tabs-form.htm" data-i18n="nav.ready-to-use.tabs-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tabs Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                    <span class="pcoded-mtext">Tables</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.bootstrap-table.main">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext">Bootstrap Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="bs-basic-table.htm" data-i18n="nav.bootstrap-table.basic-table">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Basic Table</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="bs-table-sizing.htm" data-i18n="nav.bootstrap-table.sizing-table">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Sizing Table</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="bs-table-border.htm" data-i18n="nav.bootstrap-table.border-table">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Border Table</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="bs-table-styling.htm" data-i18n="nav.bootstrap-table.styling-table">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Styling Table</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.data-table.main">
                                            <span class="pcoded-micon"><i class="ti-widgetized"></i></span>
                                            <span class="pcoded-mtext">Data Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="dt-basic.htm" data-i18n="nav.data-table.basic-initialization">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Basic Initialization</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-advance.htm" data-i18n="nav.data-table.advance-initialization">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Advance Initialization</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-styling.htm" data-i18n="nav.data-table.styling">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Styling</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-api.htm" data-i18n="nav.data-table.api">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">API</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ajax.htm" data-i18n="nav.data-table.ajax">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Ajax</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-server-side.htm" data-i18n="nav.data-table.server-side">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Server Side</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-plugin.htm" data-i18n="nav.data-table.plug-in">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Plug-In</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-data-sources.htm" data-i18n="nav.data-table.data-sources">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Data Sources</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.main">
                                            <span class="pcoded-micon"><i class="ti-loop"></i></span>
                                            <span class="pcoded-mtext">Data Table Extensions</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="dt-ext-autofill.htm" data-i18n="nav.data-table-extensions.autofill">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">AutoFill</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu">
                                                <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.button.main">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Button</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="dt-ext-basic-buttons.htm" data-i18n="nav.data-table-extensions.button.basic-button">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Basic Button</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                    <li class=" ">
                                                        <a href="dt-ext-buttons-html-5-data-export.htm" data-i18n="nav.data-table-extensions.button.html-data-export">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Html-5 Data Export</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-col-reorder.htm" data-i18n="nav.data-table-extensions.col-reorder">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Col Reorder</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-fixed-columns.htm" data-i18n="nav.data-table-extensions.fixed-columns">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Fixed Columns</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-fixed-header.htm" data-i18n="nav.data-table-extensions.fixed-header">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Fixed Header</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-key-table.htm" data-i18n="nav.data-table-extensions.key-table">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Key Table</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-responsive.htm" data-i18n="nav.data-table-extensions.responsive">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Responsive</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-row-reorder.htm" data-i18n="nav.data-table-extensions.row-recorder">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Row Reorder</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-scroller.htm" data-i18n="nav.data-table-extensions.scroller">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Scroller</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-select.htm" data-i18n="nav.data-table-extensions.select-tbl">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Select Table</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="foo-table.htm" data-i18n="nav.foo-table.main">
                                            <span class="pcoded-micon"><i class="ti-view-list-alt"></i></span>
                                            <span class="pcoded-mtext">FooTable</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.handson-table.main">
                                            <span class="pcoded-micon"><i class="ti-view-list"></i></span>
                                            <span class="pcoded-mtext">Handson Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="handson-appearance.htm" data-i18n="nav.handson-table.appearance">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Appearance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-data-operation.htm" data-i18n="nav.handson-table.data-operation">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Data Operation</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-rows-cols.htm" data-i18n="nav.handson-table.rows-columns">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Rows Columns</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-columns-only.htm" data-i18n="nav.handson-table.columns-Only">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Columns Only</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-cell-features.htm" data-i18n="nav.handson-table.cell-features">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Cell Features</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-cell-types.htm" data-i18n="nav.handson-table.cell-types">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Cell Types</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-integrations.htm" data-i18n="nav.handson-table.integrations">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Integrations</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-rows-only.htm" data-i18n="nav.handson-table.rows-Only">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Rows Only</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="handson-utilities.htm" data-i18n="nav.handson-table.utilities">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Utilities</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="editable-table.htm" data-i18n="nav.editable-table.main">
                                            <span class="pcoded-micon"><i class="ti-write"></i></span>
                                            <span class="pcoded-mtext">Editable Table</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-map-pin"></i></span>
                                    <span class="pcoded-mtext">Chart And Maps</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.charts.main"> <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i></span> <span class="pcoded-mtext">Charts</span> <span class="pcoded-mcaret"></span> </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="chart-google.htm" data-i18n="nav.charts.google-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Google Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-echart.htm" data-i18n="nav.charts.echarts"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Echarts</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-chartjs.htm" data-i18n="nav.charts.chartjs"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">ChartJs</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-list.htm" data-i18n="nav.charts.list-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">List Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-float.htm" data-i18n="nav.charts.float-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Float Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-knob.htm" data-i18n="nav.charts.know-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Knob chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-morris.htm" data-i18n="nav.charts.morris-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Morris Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-nvd3.htm" data-i18n="nav.charts.nvd3-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Nvd3 Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-peity.htm" data-i18n="nav.charts.peity-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Peity Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-radial.htm" data-i18n="nav.charts.radial chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Radial Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-rickshaw.htm" data-i18n="nav.charts.rickshaw-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Rickshaw Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-sparkline.htm" data-i18n="nav.charts.sparkline-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Sparkline Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="chart-c3.htm" data-i18n="nav.charts.c3-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">C3 Chart</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.maps.main"> <span class="pcoded-micon"><i class="ti-map-alt"></i></span> <span class="pcoded-mtext">Maps</span> <span class="pcoded-mcaret"></span> </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="map-google.htm" data-i18n="nav.maps.google-maps"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Google Maps</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="map-vector.htm" data-i18n="nav.maps.vector-map"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Vector Maps</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="map-api.htm" data-i18n="nav.maps.google-map-api"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Google Map Search API</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                            <li class="">
                                                <a href="location.htm" data-i18n="nav.maps.location"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Location</span> <span class="pcoded-mcaret"></span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="{{asset('extra-pages\landingpage\index.htm')}}" target="_blank" data-i18n="nav.landing-page.main"> <span class="pcoded-micon"><i class="ti-mobile"></i></span> <span class="pcoded-mtext">Landing Page</span> <span class="pcoded-mcaret"></span> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                    <span class="pcoded-mtext">Pages</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.authentication.main">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i></span>
                                            <span class="pcoded-mtext">Authentication</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="auth-normal-sign-in.htm" target="_blank" data-i18n="nav.authentication.login-bg-image">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Login With BG Image</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-in-social.htm" target="_blank" data-i18n="nav.authentication.login-soc-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Login With Social Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-in-social-header-footer.htm" target="_blank" data-i18n="nav.authentication.login-soc-h-f">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Login Social With Header And Footer</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-normal-sign-in-header-footer.htm" target="_blank" data-i18n="nav.authentication.login-h-f">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Login With Header And Footer</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-up.htm" target="_blank" data-i18n="nav.authentication.registration-bg-image">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Registration BG Image</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-up-social.htm" target="_blank" data-i18n="nav.authentication.registration-soc-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Registration Social Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-up-social-header-footer.htm" target="_blank" data-i18n="nav.authentication.registration-soc-h-f">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Registration Social With Header And Footer</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-up-header-footer.htm" target="_blank" data-i18n="nav.authentication.registration-h-f">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Registration With Header And Footer</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-multi-step-sign-up.htm" target="_blank" data-i18n="nav.authentication.multi-step-registration">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Multi Step Registration</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-reset-password.htm" target="_blank" data-i18n="nav.authentication.forgot-password">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Forgot Password</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-lock-screen.htm" target="_blank" data-i18n="nav.authentication.lock-screen">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Lock Screen</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-modal.htm" target="_blank" data-i18n="nav.authentication.modal">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Modal</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.maintenance.main">
                                            <span class="pcoded-micon"><i class="ti-settings"></i></span>
                                            <span class="pcoded-mtext">Maintenance</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="error.htm" data-i18n="nav.maintenance.error">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Error</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="comming-soon.htm" data-i18n="nav.maintenance.comming-soon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Comming Soon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="offline-ui.htm" data-i18n="nav.maintenance.offline-ui">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Offline UI</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.user-profile.main">
                                            <span class="pcoded-micon"><i class="ti-user"></i></span>
                                            <span class="pcoded-mtext">User Profile</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="timeline.htm" data-i18n="nav.user-profile.timeline">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Timeline</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="timeline-social.htm" data-i18n="nav.user-profile.timeline-social">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Timeline Social</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="user-profile.htm" data-i18n="nav.user-profile.user-profile">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">User Profile</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="user-card.htm" data-i18n="nav.user-profile.user-card">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">User Card</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.e-commerce.main">
                                            <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>
                                            <span class="pcoded-mtext">E-Commerce</span>
                                            <span class="pcoded-badge label label-danger">NEW</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="product.htm" data-i18n="nav.e-commerce.product">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Product</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="product-list.htm" data-i18n="nav.e-commerce.product-list">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Product List</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="product-edit.htm" data-i18n="nav.e-commerce.product-edit">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Product Edit</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="product-detail.htm" data-i18n="nav.e-commerce.product-detail">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Product Detail</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="product-cart.htm" data-i18n="nav.e-commerce.product-card">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Product Card</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="product-payment.htm" data-i18n="nav.e-commerce.credit-card-form">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Credit Card Form</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.email.main">
                                            <span class="pcoded-micon"><i class="ti-email"></i></span>
                                            <span class="pcoded-mtext">Email</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="email-compose.htm" data-i18n="nav.email.compose-mail">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Compose Email</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="email-inbox.htm" data-i18n="nav.email.inbox">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Inbox</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="email-read.htm" data-i18n="nav.email.read-read-mail">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Read Mail</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" data-i18n="nav.email.email-template.main">
                                                    <span class="pcoded-micon"><i class="ti-email"></i></span>
                                                    <span class="pcoded-mtext">Email Template</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="{{asset('extra-pages\email-templates\email-welcome.htm')}}" data-i18n="nav.email.email-template.welcome-email">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Welcome Email</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{asset('extra-pages\email-templates\email-password.htm')}}" data-i18n="nav.email.email-template.reset-password">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Reset Password</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{asset('extra-pages\email-templates\email-newsletter.htm')}}" data-i18n="nav.email.email-template.newsletter-email">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Newsletter Email</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{asset('extra-pages\email-templates\email-launch.htm')}}" data-i18n="nav.email.email-template.app-launch">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">App Launch</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{asset('extra-pages\email-templates\email-activation.htm')}}" data-i18n="nav.email.email-template.activation-code">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Activation Code</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                                    <span class="pcoded-mtext">App</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="chat.htm" data-i18n="nav.chat.main">
                                            <span class="pcoded-micon"><i class="ti-comments"></i></span>
                                            <span class="pcoded-mtext">Chat</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.social.main">
                                            <span class="pcoded-micon"><i class="ti-dribbble"></i></span>
                                            <span class="pcoded-mtext">Social</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="fb-wall.htm" data-i18n="nav.social.fb-wall">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Wall</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="message.htm" data-i18n="nav.social.messages">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Messages</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.task.main">
                                            <span class="pcoded-micon"><i class="ti-check-box"></i></span>
                                            <span class="pcoded-mtext">Task</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="task-list.htm" data-i18n="nav.task.task-list">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Task List</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="task-board.htm" data-i18n="nav.task.task-board">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Task Board</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="task-detail.htm" data-i18n="nav.task.task-detail">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Task Detail</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="issue-list.htm" data-i18n="nav.task.issue list">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Issue List</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.to-do.main">
                                            <span class="pcoded-micon"><i class="ti-notepad"></i></span>
                                            <span class="pcoded-mtext">To-Do</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="todo.htm" data-i18n="nav.to-do.todo">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">To-Do</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="notes.htm" data-i18n="nav.to-do.notes">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Notes</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.gallery.main">
                                            <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                                            <span class="pcoded-mtext">Gallery</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="gallery-grid.htm" data-i18n="nav.gallery.gallery-grid">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Gallery-Grid</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="gallery-masonry.htm" data-i18n="nav.gallery.masonry-gallery">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Masonry Gallery</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="gallery-advance.htm" data-i18n="nav.gallery.advance-gallery">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Advance Gallery</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.search.main">
                                            <span class="pcoded-micon"><i class="ti-search"></i></span>
                                            <span class="pcoded-mtext">Search</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="search-result.htm" data-i18n="nav.search.simple-search">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Simple Search</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="search-result2.htm" data-i18n="nav.search.grouping-search">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Grouping Search</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.job-search.main">
                                            <span class="pcoded-micon"><i class="ti-medall-alt"></i></span>
                                            <span class="pcoded-mtext">Job Search</span>
                                            <span class="pcoded-badge label label-danger">NEW</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="job-card-view.htm" data-i18n="nav.job-search.card-view">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Card View</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="job-details.htm" data-i18n="nav.job-search.job-detailed">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Job Detailed</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="job-find.htm" data-i18n="nav.job-search.job-find">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Job Find</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="job-panel-view.htm" data-i18n="nav.job-search.job-panel-view">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Job Panel View</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><b>E</b></span>
                                            <span class="pcoded-mtext">Extension</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" data-i18n="nav.editor.main">
                                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                                    <span class="pcoded-mtext">Editor</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="ck-editor.htm" data-i18n="nav.editor.ck-editor">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">CK-Editor</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="wysiwyg-editor.htm" data-i18n="nav.editor.wysiwyg-editor">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">WYSIWYG Editor</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="ace-editor.htm" data-i18n="nav.editor.ace-editor">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Ace Editor</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <a href="long-press-editor.htm" data-i18n="nav.editor.long-press-editor">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Long Press Editor</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" data-i18n="nav.invoice.main">
                                                    <span class="pcoded-micon"><i class="ti-layout-media-right"></i></span>
                                                    <span class="pcoded-mtext">Invoice</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="invoice.htm" data-i18n="nav.invoice.invoice">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Invoice</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="invoice-summary.htm" data-i18n="nav.invoice.invoice-summery">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Invoice Summary</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="invoice-list.htm" data-i18n="nav.invoice.invoice-list">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Invoice List</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" data-i18n="nav.event-calendar.main">
                                                    <span class="pcoded-micon"><i class="ti-calendar"></i></span>
                                                    <span class="pcoded-mtext">Event Calendar</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="event-full-calender.htm" data-i18n="nav.full-calendar.full-calendar">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Full Calendar</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="event-clndr.htm" data-i18n="nav.clnder.clnder">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">CLNDER</span>
                                                            <span class="pcoded-badge label label-info">NEW</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="image-crop.htm" data-i18n="nav.image-cropper.main">
                                                    <span class="pcoded-micon"><i class="ti-cut"></i></span>
                                                    <span class="pcoded-mtext">Image Cropper</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="file-upload.htm" data-i18n="nav.file-upload.main">
                                                    <span class="pcoded-micon"><i class="ti-cloud-up"></i></span>
                                                    <span class="pcoded-mtext">File Upload</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" data-i18n="nav.internationalize.main">
                                                    <span class="pcoded-micon"><i class="ti-world"></i></span>
                                                    <span class="pcoded-mtext">Internationalize</span>
                                                    <span class="pcoded-badge label label-danger">HOT</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="internationalization/internationalization-after-init.html" data-i18n="nav.internationalize.after-init">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">After Init</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="internationalization/internationalization-fallback.html" data-i18n="nav.internationalize.fallback">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Fallback</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="internationalization/internationalization-on-init.html" data-i18n="nav.internationalize.on-int">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">On Init</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="internationalization/internationalization-resources.html" data-i18n="nav.internationalize.resources">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Resources</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="internationalization/internationalization-xhr-backend.html" data-i18n="nav.internationalize.xhr-backend">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">XHR Backend</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="change-loges.htm" data-i18n="nav.change-loges.main">
                                                    <span class="pcoded-micon"><i class="ti-list"></i></span>
                                                    <span class="pcoded-mtext">Change Loges</span>
                                                    <span class="pcoded-badge label label-warning">1.0</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
                                    <span class="pcoded-mtext">Other</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" data-i18n="nav.menu-levels.main">
                                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                            <span class="pcoded-mtext">Menu Levels</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-21">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Menu Level 2.1</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-22.main">
                                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                                    <span class="pcoded-mtext">Menu Level 2.2</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">
                                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                            <span class="pcoded-mtext">Menu Level 3.1</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="javascript:void(0)" data-i18n="nav.menu-levels.menu-level-23">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Menu Level 2.3</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0)" data-i18n="nav.disabled-menu.main" class="disabled">
                                            <span class="pcoded-micon"><i class="ti-na"></i></span>
                                            <span class="pcoded-mtext">Disabled Menu</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="sample-page.htm" data-i18n="nav.sample-page.main">
                                            <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>
                                            <span class="pcoded-mtext">Sample Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><b>S</b></span>
                                            <span class="pcoded-mtext">Support</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="#" data-i18n="nav.documentation.main" target="_blank">
                                                    <span class="pcoded-micon"><i class="ti-file"></i></span>
                                                    <span class="pcoded-mtext">Documentation</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" target="_blank" data-i18n="nav.submit-issue.main">
                                                    <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                                    <span class="pcoded-mtext">Submit Issue</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
                <!-- Sidebar chat start -->
                {{-- <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                        <div class="card card_main p-fixed users-main">
                            <div class="user-box">
                                <div class="chat-inner-header">
                                    <div class="back_chatBox">
                                        <div class="right-icon-control">
                                            <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                            <div class="form-icon">
                                                <i class="icofont icofont-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-friend-list">
                                    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius img-radius" src="{{asset('assets\images\avatar-3.jpg')}}" alt="Generic placeholder image ">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Josephin Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="{{asset('assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Lary Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alice</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="{{asset('assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alia</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="{{asset('assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Suzen</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Sidebar inner chat start-->
                {{-- <div class="showChat_inner">
                    <div class="media chat-inner-header">
                        <a class="back_chatBox">
                            <i class="feather icon-chevron-left"></i> Josephin Doe
                        </a>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{asset('assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="media-right photo-table">
                            <a href="#!">
                                <img class="media-object img-radius img-radius m-t-5" src="{{asset('assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                            </a>
                        </div>
                    </div>
                    <div class="chat-reply-box p-b-20">
                        <div class="right-icon-control">
                            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                            <div class="form-icon">
                                <i class="feather icon-navigation"></i>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Sidebar inner chat end-->
                {{-- <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body m-t-50">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">$30200</h4>
                                                                <h6 class="text-white m-b-0">All Earnings</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-1" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">290+</h4>
                                                                <h6 class="text-white m-b-0">Page Views</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-2" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">145</h4>
                                                                <h6 class="text-white m-b-0">Task Completed</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-3" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-lite-green update-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white">500</h4>
                                                                <h6 class="text-white m-b-0">Downloads</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-4" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->

                                            <!--  sale analytics start -->
                                            <div class="col-xl-9 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Sales Analytics</h5>
                                                        <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="sales-analytics" style="height: 265px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-12">
                                                <div class="card user-card2">
                                                    <div class="card-block text-center">
                                                        <h6 class="m-b-15">Project Risk</h6>
                                                        <div class="risk-rate">
                                                            <span><b>5</b></span>
                                                        </div>
                                                        <h6 class="m-b-10 m-t-10">Balanced</h6>
                                                        <a href="#!" class="text-c-yellow b-b-warning">Change Your Risk</a>
                                                        <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                                                            <div class="col m-t-15 b-r-default">
                                                                <h6 class="text-muted">Nr</h6>
                                                                <h6>AWS 2455</h6>
                                                            </div>
                                                            <div class="col m-t-15">
                                                                <h6 class="text-muted">Created</h6>
                                                                <h6>30th Sep</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-warning btn-block p-t-15 p-b-15">Download Overall Report</button>
                                                </div>
                                            </div>
                                            <!--  sale analytics end -->

                                            <div class="col-xl-8 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Application Sales</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover  table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            Application</th>
                                                                        <th>Sales</th>
                                                                        <th>Change</th>
                                                                        <th>Avg Price</th>
                                                                        <th>Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Able Pro</h6>
                                                                                <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>16,300</td>
                                                                        <td><canvas id="app-sale1" height="50" width="100"></canvas></td>
                                                                        <td>$53</td>
                                                                        <td class="text-c-blue">$15,652</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Photoshop</h6>
                                                                                <p class="text-muted m-b-0">Design Software</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>26,421</td>
                                                                        <td><canvas id="app-sale2" height="50" width="100"></canvas></td>
                                                                        <td>$35</td>
                                                                        <td class="text-c-blue">$18,785</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Guruable</h6>
                                                                                <p class="text-muted m-b-0">Best Admin Template</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>8,265</td>
                                                                        <td><canvas id="app-sale3" height="50" width="100"></canvas></td>
                                                                        <td>$98</td>
                                                                        <td class="text-c-blue">$9,652</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="chk-option">
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox" value="">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon feather icon-check txt-default"></i>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Flatable</h6>
                                                                                <p class="text-muted m-b-0">Admin App</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>10,652</td>
                                                                        <td><canvas id="app-sale4" height="50" width="100"></canvas></td>
                                                                        <td>$20</td>
                                                                        <td class="text-c-blue">$7,856</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-center">
                                                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card user-activity-card">
                                                    <div class="card-header">
                                                        <h5>User Activity</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="{{asset('assets\images\breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img">
                                                                    <img src="{{asset('assets\images\avatar-2.jpg')}}" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="{{asset('assets\images\breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img">
                                                                    <img src="{{asset('assets\images\avatar-2.jpg')}}" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="{{asset('assets\images\breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img">
                                                                    <img src="{{asset('assets\images\avatar-2.jpg')}}" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-5">
                                                            <div class="col-auto p-r-0">
                                                                <div class="u-img">
                                                                    <img src="{{asset('assets\images\breadcrumb-bg.jpg')}}" alt="user image" class="img-radius cover-img">
                                                                    <img src="{{asset('assets\images\avatar-2.jpg')}}" alt="user image" class="img-radius profile-img">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">John Deo</h6>
                                                                <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text.</p>
                                                                <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago</p>
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- wather user -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card user-card">
                                                    <div class="card-block text-center">
                                                        <div class="usre-image">
                                                            <img src="{{asset('assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                                        </div>
                                                        <h6 class="m-t-25 m-b-10">John Deo</h6>
                                                        <p class="text-muted">Web Designer</p>
                                                        <a href="#!" class="text-c-red d-block">websitename.com</a>
                                                        <button class="btn btn-primary d-block">View Profile</button>
                                                        <div class="row justify-content-center user-social-link m-b-15">
                                                            <div class="col-auto"><a href="#!" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="feather icon-facebook text-facebook f-20"></i></a></div>
                                                            <div class="col-auto"><a href="#!" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="feather icon-twitter text-twitter f-20"></i></a></div>
                                                            <div class="col-auto"><a href="#!" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="feather icon-instagram text-dribbble f-20"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card wather-card">
                                                    <div class="nature-card">
                                                        <img src="{{asset('assets\images\widget\wathernature.png')}}" alt="whether image" class="img-fluid main-img">
                                                        <img src="{{asset('assets\images\widget\watherstar1.png')}}" alt="whether image" class="snow1">
                                                        <img src="{{asset('assets\images\widget\watherstar2.png')}}" alt="whether image" class="snow2">
                                                        <img src="{{asset('assets\images\widget\watherbottom.png')}}" alt="whether image" class="bottom-img">
                                                        <div class="nature-cont text-white">
                                                            <h6>Snow</h6>
                                                            <h2>-10°</h2>
                                                            <h6>10:20 AM</h6>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row text-c-yellow">
                                                            <div class="col">
                                                                <h6>Sunday</h6></div>
                                                            <div class="col text-right">-10°<i class="fa fa-snowflake-o m-l-20"></i></div>
                                                        </div>
                                                        <div class="row m-t-15">
                                                            <div class="col">
                                                                <h6>Monday</h6></div>
                                                            <div class="col text-right">8°<i class="fa fa-cloud m-l-20"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="{{asset('assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600">Jeny William</h6>
                                                                <p>Web Designer</p>
                                                                <i class="feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400"><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="d8b2bdb6a198bfb5b9b1b4f6bbb7b5">[email&#160;protected]</a></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone</p>
                                                                        <h6 class="text-muted f-w-400">0023-333-526136</h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Recent</p>
                                                                        <h6 class="text-muted f-w-400">Guruable Admin</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Most Viewed</p>
                                                                        <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- wather user -->

                                            <!-- social download  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-blue">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Mail</h6>
                                                                <p>2312w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card social-card bg-simple-c-pink">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">twitter</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card social-card bg-simple-c-green">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-0">Dropbox</h6>
                                                                <p>231.2w downloads</p>
                                                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                </div>
                                            </div>
                                            <!-- social download  end -->

                                        </div>
                                    </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>







                <!-- Sidebar inner chat end-->
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                            <!-- <div class="main-body"> -->

                                @yield('content')


                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>



    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
    <script type="text/javascript" src="{{asset('bower_components\jquery\js\jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('bower_components\popper.js\js\popper.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('bower_components\bootstrap\js\bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('bower_components\modernizr\js\modernizr.js') }}"></script>
    <script type="text/javascript" src="{{asset('bower_components\modernizr\js\css-scrollbars.js') }}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('bower_components\chart.js\js\Chart.js') }}"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="{{asset('assets\pages\dashboard\amchart\js\amcharts.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets\pages\dashboard\amchart\js\serial.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets\pages\dashboard\amchart\js\light.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('assets\pages\dashboard\custom-dashboard.min.js') }}"></script>
    <script src="{{asset('assets\js\pcoded.min.js') }}"></script>
    <script src="{{asset('assets\js\horizontal-layout.min.js') }}"></script>
    <script src="{{asset('assets\js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets\js\script.js') }}"></script>

       <!-- data-table js -->
       <script src="{{asset('bower_components\datatables.net\js\jquery.dataTables.min.js')}}"></script>
       <script src="{{asset('bower_components\datatables.net-buttons\js\dataTables.buttons.min.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\js\jszip.min.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\js\pdfmake.min.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\js\vfs_fonts.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\extensions\buttons\js\dataTables.buttons.min.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\extensions\buttons\js\buttons.flash.min.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\extensions\buttons\js\jszip.min.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\extensions\buttons\js\vfs_fonts.js')}}"></script>
       <script src="{{asset('assets\pages\data-table\extensions\buttons\js\buttons.colVis.min.js')}}"></script>
       <script src="{{asset('bower_components\datatables.net-buttons\js\buttons.print.min.js')}}"></script>
       <script src="{{asset('bower_components\datatables.net-buttons\js\buttons.html5.min.js')}}"></script>
       <script src="{{asset('bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>
       <script src="{{asset('bower_components\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>
       <script src="{{asset('bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>
           <!-- Custom js -->
           <script type="text/javascript" src="{{ asset('bower_components/select2/js/select2.full.min.js') }}"></script>
           <script type="text/javascript" src="{{ asset('assets/pages/advance-elements/select2-custom.js') }}"></script>
    <script src="{{asset('assets\pages\data-table\extensions\buttons\js\extension-btns-custom.js')}}"></script>
    <script src="{{asset('assets\js\pcoded.min.js')}}"></script>
    {{-- <script src="{{asset('assets\js\vartical-layout.min.js')}}"></script> --}}
    <script src="{{asset('assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets\js\script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>



    <script src="{{ asset('assets\pages\jquery.filer\js\jquery.filer.min.js')}}"></script>
    <script src="{{ asset('assets\pages\filer\custom-filer.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets\pages\filer\jquery.fileuploads.init.js')}}" type="text/javascript"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<!-- <script>
      const chart = new Chartisan({
        el: '#chart',

        headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),

                                'Content-Type': 'application/json',
                                'Accept': 'application/vnd.api.v1+json',
                                 'Access-Control-Allow-Origin': 'http://api.getstaysavvy',
                               ' Access-Control-Allow-Origin':'*'

                            },
                            url: "http://api.getstaysavvy.co.uk/api/sampleChart1" ,
                            dataType: 'json',
                            type: "GET",


crossDomain: false,


      })
    </script> -->

    <script>
        $(document).ready(function() {
            $('._delete_data').click(function(e) {
                var data_id = $(this).attr('data-id');
                // alert(data_id);
                Swal.fire({
                    title: 'Are you sure to Delete?',
                    // text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    if (result.value) {
                        $(document).find('#delete_from_' + data_id).submit();
                        Swal.fire(
                            'Deleted!',
                            'Your  Record has been deleted.',
                            'success'
                        )
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Cancelled',
                            'Your  Record is safe',
                            'error'
                        )
                    }
                })
            });
        });
    </script>


    <script>
        // $('.edit-confirmation').on('click', function (event) {
        //     event.preventDefault();
        //     const url = $(this).attr('href');
        //     swal({
        //         title: "Are you sure to edit?",

        // type: "warning",
        // showCancelButton: true,
        // confirmButtonColor: '#DD6B55',
        // confirmButtonText: 'Yes, I am sure!',
        // cancelButtonText: "No, cancel it!"
        //     }).then(function(value) {
        //         if (value) {
        //             window.location.href = url;
        //         }
        //     });
        // });
        $('.edit-confirmation').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: "Are you sure to edit?",

                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!"
            }).then((result) => {

                if (result.value) {
                    window.location.href = url;

                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'You  Cancelled',
                        'error'
                    )
                }
            })
        });



        // view script
        $('.view-confirmation').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: "Are you sure to View?",

                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!"
            }).then((result) => {

                if (result.value) {
                    window.location.href = url;

                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'You  Cancelled',
                        'error'
                    )
                }
            })
        });
    </script>


    <script>
        $(".errorWrap").each(function() {
            swal("Error", "'" + $(this).text() + "'", 'warning');
            $(this).hide();
        });
    </script>
    <script>
        $(".succWrap").each(function() {

            //         swal(
            //                {
            //                    title: 'Successfully Created!',
            //                    text: 'You clicked the button!',
            //                    type: 'success',
            //                    confirmButtonClass: 'btn btn-confirm mt-2'
            //                }
            //            );
            swal("Success ", "" + $(this).text() + "", 'success');
            $(this).hide();
        });
    </script>


</body>

</html>
