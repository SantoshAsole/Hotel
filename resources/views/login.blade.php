<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('assets/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ url('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{ url('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/datatables.min.css') }}" rel="stylesheet">
    <!-- Costic styles -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->



    <link href="{{ url('public/assets/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/assets/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ url('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ url('public/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{ url('public/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/datatables.min.css') }}" rel="stylesheet">
    <!-- Costic styles -->
    <link href="{{ url('public/assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="ms-body ms-primary-theme ms-logged-out">

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
    <main class="body-content">
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper ms-auth">
            <div class="ms-auth-container">
                <div class="ms-auth-col">
                    <div class="ms-auth-bg"></div>
                </div>
                <div class="ms-panel position-custom">
                    <div class="ms-panel-body">
                        <div class="auth-img mb-3 mx-3 px-4">
                            <img src="{{ url('/') }}/assets/img/costic/logo-2.png" alt="" width="300">
                        </div>

                        
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="auth-img-label my-4  text-center">
                                <h3 class="ms-text-primary">Admin Login</h3>
                            </div>

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control bg-transparent  required" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" placeholder="Email Address"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-3">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control bg-transparent  required" type="password" name="password"
                                    required autocomplete="current-password" placeholder="Password"/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>



                            <div class="flex items-center justify-end mt-4">


                                <x-primary-button class="btn btn-primary my-4 d-block w-100">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="{{ url('assets/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Page Specific Scripts Finish -->
    <!-- Costic core JavaScript -->
    <script src="{{ url('assets/js/framework.js') }}"></script>
    <!-- Settings -->
    <script src="{{ url('assets/js/settings.js') }}"></script>

    <!-- Global Required Scripts Start -->
    <script src="{{ url('public/assets/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery-ui.min.js') }}"></script>
    <!-- Page Specific Scripts Finish -->
    <!-- Costic core JavaScript -->
    <script src="{{ url('public/assets/js/framework.js') }}"></script>
    <!-- Settings -->
    <script src="{{ url('public/assets/js/settings.js') }}"></script>
</body>

</html>
