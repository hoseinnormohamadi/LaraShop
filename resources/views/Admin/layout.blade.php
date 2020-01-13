<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adminice - Dashboard</title>
    <meta name="description" content="Adminice is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <!-- Stylesheet -->
    <!-- Font Iran licence -->
    <link rel="stylesheet" href="/css/fontiran.css">

    <link rel="stylesheet" href="/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/css/base/seenboard-1.0.css">
    <link rel="stylesheet" href="/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl-carousel/owl.theme.min.css">
    @yield('header')
</head>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="/img/logo.png" alt="logo" class="loader-logo">
        <div class="spinner"></div>
    </div>
</div>
<!-- End Preloader -->
<div class="page">
    <!-- Begin Header -->
    <header class="header">
        <nav class="navbar fixed-top">

            <!-- Begin Topbar -->
            <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                <!-- Begin Logo -->
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <div class="brand-image brand-big">
                            <img src="/img/logo-big.png" alt="logo" class="logo-big">
                        </div>
                        <div class="brand-image brand-small">
                            <img src="/img/logo.png" alt="logo" class="logo-small">
                        </div>
                    </a>
                    <!-- Toggle Button -->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- End Toggle -->
                </div>
                <!-- End Logo -->
                <!-- Begin Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                    <!-- Begin Notifications -->
                    <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu notification">
                            <li>
                                <div class="notifications-header">
                                    <div class="title">اعلان ها (4)</div>
                                    <div class="notifications-overlay"></div>
                                    <img src="/img/notifications/01.jpg" alt="..." class="img-fluid">
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-user"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            ثبت نام کاربر جدید
                                        </div>
                                        <span class="date">2 ساعت قبل</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-calendar-check-o"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            رویداد جدید
                                        </div>
                                        <span class="date">7 ساعت قبل</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-history"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            سرور دوباره راه اندازی شد
                                        </div>
                                        <span class="date">7 ساعت قبل</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-twitter"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            شما 3 فالوور جدید دارید
                                        </div>
                                        <span class="date">10 ساعت قبل</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">مشاهده همه اعلانها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Notifications -->
                    <!-- User -->
                    <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="/img/avatar/avatar-01.jpg" alt="..." class="avatar rounded-circle"></a>
                        <ul aria-labelledby="user" class="user-size dropdown-menu">
                            <li class="welcome">
                                <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                <img src="/img/avatar/avatar-01.jpg" alt="..." class="rounded-circle">
                            </li>
                            <li>
                                <a href="pages-profile.html" class="dropdown-item">
                                    پروفایل
                                </a>
                            </li>
                            <li>
                                <a href="app-mail.html" class="dropdown-item">
                                    پیامها
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item no-padding-bottom">
                                    تنظیمات
                                </a>
                            </li>
                            <li class="separator"></li>
                            <li>
                                <a href="pages-faq.html" class="dropdown-item no-padding-top">
                                    پرسش و پاسخ
                                </a>
                            </li>
                            <li><a rel="nofollow" href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <!-- End User -->
                </ul>
                <!-- End Navbar Menu -->
            </div>
            <!-- End Topbar -->
        </nav>
    </header>
    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            <!-- Begin Side Navbar -->
            <nav class="side-navbar box-scroll sidebar-scroll">
                <!-- Begin Main Navigation -->
                <ul class="list-unstyled">
                    @auth
                    <li><a href="/"><i class="ti ti-home"></i><span>خانه</span></a></li>
                    <li><a href="/Admin/Createnew"><i class="ti ti-plus"></i><span>افزودن دوره</span></a></li>
                    <li><a href="/Admin/Courses"><i class="la la-eye"></i><span>مشاهده دوره ها</span></a></li>
                    @else
                        <li><a href="/Admin/register"><i class="la la-user-plus"></i><span>ثبت نام</span></a></li>
                        <li><a href="/Admin/login"><i class="la la-user"></i><span>ورود</span></a></li>

                    @endauth
                </ul>

                <!-- End Main Navigation -->
            </nav>
            <!-- End Side Navbar -->
        </div>
        <!-- End Left Sidebar -->
        <div class="content-inner">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title">داشبورد</h2>

                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <!-- Begin Row -->
                @yield('content')
            </div>
            <!-- End Container -->
            <!-- Begin Page Footer-->
        {{--    <footer class="main-footer">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                        <p class="text-gradient-02">طراحی شده در | شرکت توسعه وب خان</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="documentation.html">مستندات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="changelog.html">آپدیت ها</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>--}}
            <!-- End Page Footer -->
            <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Page Content -->
</div>
<!-- Begin Vendor Js -->
<script src="/vendors/js/base/jquery.min.js"></script>
<script src="/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="/vendors/js/progress/circle-progress.min.js"></script>
<script src="/vendors/js/calendar/moment.min.js"></script>
<script src="/vendors/js/calendar/fullcalendar.min.js"></script>
<script src="/vendors/js/calendar/locale/fa.js"></script>
<script src="/vendors/js/owl-carousel/owl.carousel.min.js"></script>
<script src="/vendors/js/app/app.js"></script>
@yield('js')
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<!-- End Page Snippets -->
</body>


<!-- Mirrored from rtl-temp.ir/Theme/Adminice/db-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jan 2020 13:11:03 GMT -->
</html>
