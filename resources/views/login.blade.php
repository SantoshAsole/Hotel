<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sahyadri Hospital || Login</title>
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
    <!-- <link rel="shortcut icon" type="image/jpg"  href="{{ url('assets/img/costic/main-logo.png') }}"> -->
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

                        {{-- <form id="LoginForm" method="post" action="">
                            @csrf
                            <!-- <h3>The Fooods || Login</h3>
                            <p>Find and order your fooods.</p> -->
                            <div class="auth-img-label my-4  text-center">
                                <h3 class="ms-text-primary">Admin Login</h3>
                            </div>
                            <div class="mb-3">
                                <label for="user_email">Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control bg-transparent  required" id="user_email"
                                        name="username" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="validationCustom09">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control bg-transparent required"
                                        placeholder="Password" id="user_password" name="password">
                                </div>
                            </div>
                            <span> <span class="ms-text-primary">*</span> Forgot Password Please Contact <a
                                    href="mailto:admin@thefooods.com">Super Admin</a></span>
                            <div class="error text-center mt-2">
                                <div id="error"></div>
                            </div>

                            <button id="btn-submit" onclick="Login()" class="btn btn-primary my-4 d-block w-100"
                                type="submit">Login</button>
                        </form> --}}
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

    <!-- Login script -->
    <script>
        // $('#user_password').keypress(function(e) {
        //     if (e.which == 13) {
        //         Login();
        //     }
        // });
        // history.clear()
        // history.replaceState(null, null,null,null,null,null,null,null,null, null,null,null,null,null,null,null, location.href);
        // history.back();

        // function Login() {
        //     var fields = $("input[class*='required']");
        //     for (let i = 0; i <= fields.length; i++) {
        //         if ($(fields[i]).val() === '') {
        //             var currentElement = $(fields[i]).attr('id');
        //             var value = currentElement.replaceAll('_', ' ');
        //             $("#error").removeClass().html('');
        //             $("#error").show().addClass('alert alert-danger').html('The ' + value + ' field is required.');
        //             return false;
        //         } else {
        //             $("#error").hide().removeClass().html('');
        //         }
        //     }

        //     $.ajax({
        //         type: "GET",
        //         url: "",
        //         data: $("#LoginForm").serialize(),
        //         beforeSend: function() {
        //             $("#btn-submit").attr('disabled')
        //         },
        //         success: function(data) {
        //             $("#btn-submit").attr('')
        //             if (data['success'] == true) {
        //                 $("#error").show().addClass('alert alert-success').html(data['message']);
        //                 setTimeout(() => {
        //                     // if(data['permission']){
        //                     //     window.location.href = ""
        //                     // }else{
        //                     //     window.location.href = ""
        //                     // }
        //                     window.location.href = ""
        //                 }, '800');
        //             } else {
        //                 $("#error").show().addClass('alert alert-danger').html(data['message']);
        //             }
        //         }
        //     })
        // }
    </script>
    <!-- Login script -->
</body>

</html>
