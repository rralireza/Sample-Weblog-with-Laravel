<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="nozha admin panel fully support rtl with complete dark mode css to use. ">
    <meta name=”robots” content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('admin/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('admin/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('/admin/css/normalize.css') }}">
    <link href="{{ asset('/admin/css/fontawsome/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>

<body class="rtl persianumber">

<div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
    <header class="bmd-layout-header ">
        <div class="navbar navbar-light bg-faded animate__animated animate__fadeInDown">
            <button class="navbar-toggler animate__animated animate__wobble animate__delay-2s" type="button"
                    data-toggle="drawer" data-target="#dw-s1">
                <span class="navbar-toggler-icon"></span>
                <!-- <i class="material-Animation">menu</i> -->
            </button>
            <ul class="nav navbar-nav p-0">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle  m-0" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-envelope fa-lg"></i><span
                                class="badge badge-pill badge-danger animate__animated animate__flash animate__repeat-3 animate__slower animate__delay-2s">5</span>
                        </button>
                        <div aria-labelledby="dropdownMenu2"
                             class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right-lg">
                            <span class="dropdown-item dropdown-header">15 اطلاعیه</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="far fa-envelope c-main mr-2"></i> 4 پیام جدید
                                <span class="float-right-rtl text-muted text-sm">3 دقیقه پیش</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="far fa-user c-main mr-2"></i> 8 درخواست دوستی
                                <span class="float-right-rtl text-muted text-sm">12 ساعت پیش</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="far fa-file c-main mr-2"></i> 3 گزارش جدید
                                <span class="float-right-rtl text-muted text-sm">2 روز پیش</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">دیدن همه</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-bell  fa-lg "></i><span
                                class="badge badge-pill badge-warning animate__animated animate__flash animate__repeat-3 animate__slower animate__delay-2s">5</span>
                        </button>
                        <div aria-labelledby="dropdownMenu2"
                             class="dropdown-menu dropdown-menu-right dropdown-menu dropdown-menu-right-lg">
                            <span class="dropdown-item dropdown-header persianumber">15 اطلاعیه</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="far fa-envelope c-main mr-2"></i> 4 پیام جدید
                                <span class="float-right-rtl text-muted text-sm">3 دقیقه پیش</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="far fa-user c-main mr-2"></i> 8 درخواست دوستی
                                <span class="float-right-rtl text-muted text-sm">12 ساعت پیش</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="far fa-file c-main mr-2"></i> 3 گزارش جدید
                                <span class="float-right-rtl text-muted text-sm">2 روز پیش</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">دیدن همه</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"> <img src="{{ str_replace('public' , '/storage' , Auth::user()->image) }}" alt="{{ Auth::user()->name }}"
                                           class="rounded-circle screen-user-profile"></li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div aria-labelledby="dropdownMenu4"
                             class="dropdown-menu  pl-3 dropdown-menu-right dropdown-menu dropdown-menu-right"
                             aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button"><i
                                    class="far fa-user c-main fa-sm mr-2"></i>پروفایل</button>
                            <button onclick="dark()" class="dropdown-item" type="button"><i
                                    class="fas fa-moon fa-sm c-main mr-2"></i>حالت شب</button>
                            <button class="dropdown-item" type="button"><i
                                    class="fas fa-cog c-main fa-sm mr-2"></i>تنظیمات</button>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit"><i
                                        class="fas fa-sign-out-alt c-main fa-sm mr-2"></i>خروج</button>
                            </form>
                        </div>
                    </div>
                </li>




            </ul>
        </div>
    </header>


