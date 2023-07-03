<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hotel</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('assets/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Select2 core CSS -->
    <link href="{{ url('assets/css/select2.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ url('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{ url('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Costic styles -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/croppie.css') }}" rel="stylesheet">
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/jpg" href="{{ url('assets/img/costic/app_icon2.png') }}"> --}}
    <script src="{{ url('assets/js/jquery-3.5.0.min.js') }}"></script>





    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<style>
    .sidemenuselected {
        color: rgb(164, 0, 50) !important;
    }

    .form-control {
        shadow: none;
    }
    .dataTables_length{
        margin-right: 55%;
    }
</style>

<body class=" ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>

    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity"
        data-toggle="slideRight"></div>
    <!-- Sidebar Navigation Left -->
    <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
        <!-- Logo -->
        <div class="logo-sn ms-d-block-lg">
            <a class="pl-0 ml-0 text-center" href="">
                {{-- <img src="{{ url('assets/img/costic/b2c-logo.png') }}" alt="logo"> --}}
            </a>
        </div>
        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item ">
                <a href="{{route('dashboard')}}" class="sidemenuselected "> <span class="{{ Request::is('dashboard') ? 'sidemenuselected' : '' }}"><i
                            class="material-icons fs-16">dashboard</i>Dashboard </span>
                </a>
            </li>


            <li class="menu-item ">
                <a href="{{route('HotelManagement')}}" class=" "> <span class="{{ Request::is('Hotel-Management') ? 'sidemenuselected' : '' }}"><i class="flaticon-list fs-18"></i>
                        Hotel Management </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="{{route('QRManagement')}}" class=" "> <span class="{{ Request::is('QR-Management') ? 'sidemenuselected' : '' }}"><i class="flaticon-list fs-18"></i>
                        QR Management </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="" class="sidemenuselected"> <span class=""><i
                            class="fas fa-utensils fs-16"></i>Order History </span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        <nav class="navbar ms-navbar">
            <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span
                    class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>
            {{-- <h5>Admin Dashboard</h5> --}}
            <div class="logo-sn logo-sm ms-d-block-sm">
                <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="" alt="logo">
                </a>
            </div>
            <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">


                <li class="ms-nav-item ms-nav-user dropdown">
                    <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="ms-user-img ms-img-round float-right" src="https://thefooods.com/thefooods.com/assets/images/logo/logo.png" alt="SA">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                        <li class="dropdown-menu-header">
                            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome,
                                {{ Auth::user()->name }}</span></h6>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-menu-footer">
                            <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="media fs-14 p-2" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <span><i
                                                    class="flaticon-shut-down mr-2"></i>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown"
                data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>
        </nav>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Account Setting</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label>Cafeteria Opening Time</label>
                                <div class="input-group">
                                    <input type="time" value="{{ Session::get('opening_time') ?? '' }}"
                                        class="form-control required" id="cafeteria_opening_time"
                                        name="cafeteria_opening_time" value=""
                                        placeholder="Enter Cafeteria Opening Time">
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Cafeteria Closing Time</label>
                                <div class="input-group">
                                    <input type="time" value="{{ Session::get('closing_time') ?? '' }}"
                                        class="form-control required" id="cafeteria_closing_time"
                                        name="cafeteria_closing_time" value=""
                                        placeholder="Enter Cafeteria Closing Time">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-success" style="width:100%;"
                                onclick="UpdateCafeteriaTime()">Save</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="ms-content-wrapper">
