<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Leonidas</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset ('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset ('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset ('assets/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset ('assets/css/dataTables.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset ('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="assets/img/logo-small.png" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                        role="button">
                        <img src="assets/img/flags/branch.png" alt="" height="20">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item"> Branch 1</a>
                        <a href="javascript:void(0);" class="dropdown-item"> Branch 2</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/notification-bing.svg" alt="img"> <span
                            class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                      
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>Joe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="{{route ('logout')}}"><img
                                    src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="signin.html">Logout</a>
                </div>
            </div>
        </div>
        @yield('content')

    </div>


    <script src="{{asset ('assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset ('assets/js/feather.min.js')}}"></script>

    <script src="{{asset ('assets/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset ('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('assets/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset ('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset ('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset ('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset ('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

    <script src="{{asset ('assets/js/script.js')}}"></script>

    <script src="assets/js/feather.min.js"></script>



<script src="{{ asset("assets/js/moment.min.js") }}"></script>
</body>

</html>
