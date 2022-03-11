<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from andit.co/projects/html/andshop/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Mar 2022 12:04:47 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Login - AndShop</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('/css/fontawesome.all.min.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('/css/meanmenu.min.css') }}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('/css/color.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <!-- Preloader Area -->
   {{ View :: make('header')}}

    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Login</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Login</h3>
                        <form action="login" method="POST">
                            @csrf
                            <div class="default-form-box">
                                <label>Username or email <span>*</span></label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="login_submit">
                                <button class="theme-btn-one btn-black-overlay btn_md" type="submit">login</button>
                            </div>
                            <div class="remember_area">
                                <label class="checkbox-default">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>

                            <a href="register.html">Create Your Account?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

  {{ View :: make('footer')}}


    <!-- Jquery -->
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('/js/meanmenu.min.js') }}"></script>
    <!-- lineProgressbar js -->
    <script src="{{ asset('/js/jquery.waypoints.js') }}"></script>
    <!-- lineProgressbar js -->
    <script src="{{ asset('/js/jquery.lineProgressbar.js') }}"></script>
    <!-- Count js -->
    <script src="{{ asset('/js/count.js') }}"></script>
    <!-- Timer js -->
    <script src="{{ asset('/js/nice-select.min.js') }}"></script>
    <!-- wow.js -->
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>



</html>