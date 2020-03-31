<!doctype html>
<!--
Template Name: JB desks
Version: 1.0.0
Author:

-->
<!--[if IE 8]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta name="description" content="JB desks,job portal,job">
    <meta name="keywords" content="JB desks,job portal,job">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">

    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/animate.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.min.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/fonts.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/flaticon.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/font-awesome.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/owl.carousel.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/owl.theme.default.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/dropify.min.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/jquery-ui.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/magnific-popup.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/nice-select.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/reset.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/responsive.css") }}" />

    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset("assets/images/favicon.png") }}" />
</head>

<body>
<!-- preloader Start -->
<!-- preloader Start -->
<div class="jb_preloader">
    <div class="spinner_wrap">
        <div class="spinner"></div>
    </div>
</div>
<div class="cursor"></div>
<!-- Top Scroll Start --><a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
<!-- Top Scroll End -->
<!-- cp navi wrapper Start -->
<nav class="cd-dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <h2><a href="index.html"> <span><img src="{{ asset("assets/images/logo.png") }}" alt="img"></span></a></h2>
    <a href="#0" class="cd-close">بستن</a>
    <ul class="cd-dropdown-content">
        <li>
            <form class="cd-search">
                <input type="search" placeholder="جستجو...">
            </form>
        </li>
        <li class="has-children">
            <a href="#">خانه</a>
            <ul class="cd-secondary-dropdown icon_menu is-hidden">
                <li class="go-back"><a href="#0">منو</a></li>
                <li><a href="index.html">خانه 1</a></li>
                <li><a href="index_II.html">خانه 2</a></li>
                <li><a href="index_III.html">خانه 3</a></li>
            </ul>
        </li>
        <li class="has-children">
            <a href="#">مشاغل</a>
            <ul class="cd-secondary-dropdown icon_menu is-hidden">
                <li class="go-back"><a href="#0">منو</a></li>
                <li><a href="job_listing_grid_left_filter.html">آگهی شغلی گرید </a></li>
                <li><a href="job_listing_list_left_filter.html">آگهی شغلی لیست</a></li>
                <li><a href="job_single.html">شغل تنها</a></li>
            </ul>
        </li>
        <!-- .has-children -->
        <li class="has-children">
            <a href="#">صفحات</a>
            <ul class="cd-secondary-dropdown icon_menu is-hidden">
                <li class="go-back"><a href="#0">منو</a></li>
                <li><a href="about_us.html">درباره ما</a></li>
                <li><a href="companies.html">شرکت ها</a></li>
                <li><a href="company_single.html">شرکت تنها</a></li>
                <li><a href="error_page.html">صفحه ارور</a></li>
                <li><a href="login.html">ورود</a></li>
                <li><a href="pricing_table.html">جدول قیمت گذاری</a></li>
                <li><a href="sign_up.html">ثبت نام</a></li>
            </ul>
        </li>
        <li class="has-children">
            <a href="#">داشبورد</a>
            <ul class="cd-secondary-dropdown is-hidden">
                <li class="go-back"><a href="#0">منو</a>
                </li>
                <li class="has-children"> <a href="#">داوطلب</a>
                    <ul class="cd-secondary-dropdown is-hidden">
                        <li class="go-back"><a href="#0">منو</a>
                        </li>
                        <li>
                            <a href="../dashboard/candidate_applied_job.html">شغل تاییده شده </a>
                        </li>
                        <li>
                            <a href="../dashboard/candidate_dashboard.html">داشبورد</a>
                        </li>
                        <li>
                            <a href="../dashboard/candidate_edit_profile.html"> ویرایش پروفایل</a>
                        </li>
                        <li>
                            <a href="../dashboard/candidate_favourite_job.html">شغل موردعلاقه</a>
                        </li>
                        <li>
                            <a href="../dashboard/candidate_resume.html"> رزومه</a>
                        </li>
                        <li>
                            <a href="../dashboard/message.html"> پیام</a>
                        </li>
                        <li>
                            <a href="../dashboard/pricing_plans.html">برنامه های قیمت گذاری</a>
                        </li>
                    </ul>
                    <!-- .cd-secondary-dropdown -->
                </li>
                <!-- .has-children -->
                <li class="has-children"> <a href="#">شرکت</a>
                    <ul class="cd-secondary-dropdown is-hidden">
                        <li class="go-back"><a href="#0">منو</a>
                        </li>
                        <li>
                            <a href="../dashboard/comp_applications.html"> برنامه ها </a>
                        </li>
                        <li>
                            <a href="../dashboard/comp_company_page.html">صفحه شرکت</a>
                        </li>
                        <li>
                            <a href="../dashboard/comp_employer_dashboard.html"> داشبورد</a>
                        </li>
                        <li>
                            <a href="../dashboard/comp_employer_edit_profile.html">ویرایش پروفایل</a>
                        </li>
                        <li>
                            <a href="../dashboard/comp_employer_manage_jobs.html"> مدیریت مشاغل</a>
                        </li>
                        <li>
                            <a href="../dashboard/comp_post_new_job.html"> ارسال شغل جدید</a>
                        </li>
                        <li>
                            <a href="../dashboard/message.html">پیام</a>
                        </li>
                        <li>
                            <a href="../dashboard/pricing_plans.html">برنامه های قیمت گذاری</a>
                        </li>
                    </ul>
                    <!-- .cd-secondary-dropdown -->
                </li>
            </ul>
            <!-- .cd-secondary-dropdown -->
        </li>
        <li class="has-children">
            <a href="#">وبلاگ</a>
            <ul class="cd-secondary-dropdown icon_menu is-hidden">
                <li class="go-back"><a href="#0">منو</a></li>
                <li><a href="blog_single.html">وبلاگ تنها</a></li>
                <li><a href="blog_category_right_sidebar.html">دسته بندی وبلاگ</a></li>
            </ul>
        </li>
        <li><a href="contact_us.html">تماس با ما </a></li>
        <li><a href="login.html">ورود</a></li>
    </ul>
    <!-- .cd-dropdown-content -->
</nav>
<div class="cp_navi_main_wrapper jb_cover">
    <div class="container-fluid">
        <div class="cp_logo_wrapper">
            <a href="index.html">
                <img src="{{ asset("assets/images/logo.png") }}" alt="logo">
            </a>
        </div>
        <!-- mobile menu area start -->
        <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cd-dropdown-wrapper">
                            <a class="house_toggle" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                            </a>
                            <!-- .cd-dropdown -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-dropdown-wrapper -->
        </header>
        <div class="menu_btn_box header_btn jb_cover">
            <ul>
                @guest
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}"><i class="flaticon-man-user"></i> ثبت نام</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('login') }}"> <i class="flaticon-login"></i> ورود</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            خروج از حساب
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li>
                        <a href="#"> <i class="flaticon-man-user"></i> داشبورد</a>
                    </li>
                @endguest
            </ul>
        </div>

        <div class="jb_navigation_wrapper">
            <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <ul class="main_nav_ul">
                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">خانه</a>
                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="index.html"><i class="fas fa-square"></i>خانه 1 </a>
                            </li>
                            <li class="parent">
                                <a href="index_II.html"><i class="fas fa-square"></i>خانه 2</a>
                            </li>
                            <li class="parent">
                                <a href="index_III.html"><i class="fas fa-square"></i> خانه 3</a>
                            </li>

                        </ul>
                    </li>
                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">مشاغل</a>
                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="job_listing_grid_left_filter.html"> <i class="fas fa-square"></i>آگهی شغلی گرید </a>
                            </li>
                            <li class="parent">
                                <a href="job_listing_list_left_filter.html"> <i class="fas fa-square"></i>آگهی شغلی لیست </a>
                            </li>
                            <li class="parent">
                                <a href="job_single.html"> <i class="fas fa-square"></i>شغل تنها</a>
                            </li>

                            <li class="parent">
                                <a href="#"><i class="fas fa-square"></i>مشاغل<span><i class="fas fa-chevron-right"></i>
									</span></a>
                                <ul class="dropdown-menu-right">
                                    <li>
                                        <a href="job_listing_grid_left_filter.html"> <i class="fas fa-square"></i>آگهی شغلی گرید </a>
                                    </li>
                                    <li>
                                        <a href="job_listing_list_left_filter.html"> <i class="fas fa-square"></i>آگهی شغلی لیست </a>
                                    </li>
                                    <li>
                                        <a href="job_single.html"> <i class="fas fa-square"></i>شغل تنها</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-mega gc_main_navigation kv_sub_menu">
                        <a href="#" class="gc_main_navigation">  داوطلبین</a>
                        <!-- mega menu start -->
                        <ul class="kv_mega_menu">

                            <li class="kv_mega_menu_width">
                                <div class="container">

                                    <div class="jn_menu_partion_div">

                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list jb_cover">
                                                <h1>مهارت های شغلی</h1>
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>HTML5 & CSS3</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>وردپرس</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>جاوااسکریپت</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>فتوشاپ</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>طراح</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>ساخت و ساز</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list jb_cover">
                                                <h1>دسته بندی ها</h1>
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>طراحی گرافیک</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>مشاغل مهندسی</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>مشاغل اصلی</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>مشاغل پر کاربرد</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>مشاغل دولتی</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>شرکت فناوری اطلاعات</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list   jb_cover">
                                                <h1>موقعیت شغل</h1>
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>هند</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>امریکا</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>ژاپن</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>دبی</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>افریقای جنوبی</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fas fa-square"></i>چین</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list   jb_cover">
                                                <h1>مشاغل باز</h1>
                                                <div class="open_jobs_wrapper">
                                                    <div class="open_jobs_wrapper_1 jb_cover">
                                                        <img src="{{ asset("assets/images/job1.jpg") }}" alt="img">
                                                        <div class="open_job_text">
                                                            <h3><a href="#">برخی از طراحان آن را تحمل کردند</a></h3>
                                                            <p>5 ساعت پیش</p>

                                                        </div>
                                                    </div>
                                                    <div class="open_jobs_wrapper_1 jb_cover">
                                                        <img src="{{ asset("assets/images/job1.jpg") }}" alt="img">
                                                        <div class="open_job_text">
                                                            <h3><a href="#">برخی از طراحان آن را تحمل کردند</a></h3>
                                                            <p>12 ساعت پیش</p>

                                                        </div>
                                                    </div>
                                                    <div class="view_all_job jb_cover"><a href="#">مشاهده همه مشاغل</a></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </li>
                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation active_class">صفحات</a>
                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="about_us.html"> <i class="fas fa-square"></i>درباره ما</a>
                            </li>
                            <li class="parent">
                                <a href="companies.html"> <i class="fas fa-square"></i>شرکت ها</a>
                            </li>
                            <li class="parent">
                                <a href="company_single.html"> <i class="fas fa-square"></i>شرکت تنها</a>
                            </li>
                            <li class="parent">
                                <a href="error_page.html"><i class="fas fa-square"></i>صفحه ارور</a>
                            </li>
                            <li class="parent">
                                <a href="login"><i class="fas fa-square"></i>ورود</a>
                            </li>
                            <li class="parent">
                                <a href="pricing_table.html"><i class="fas fa-square"></i>جدول قیمت گذاری</a>
                            </li>
                            <li class="parent">
                                <a href="sign_up.html"><i class="fas fa-square"></i>ثبت نام</a>
                            </li>

                        </ul>
                    </li>
                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">داشبورد</a>
                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="#"><i class="fas fa-square"></i>داوطلب<span><i class="fas fa-chevron-right"></i>
									</span></a>
                                <ul class="dropdown-menu-right">
                                    <li>
                                        <a href="../dashboard/candidate_applied_job.html"> <i class="fas fa-square"></i>شغل تاییده شده </a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/candidate_dashboard.html"> <i class="fas fa-square"></i> داشبورد</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/candidate_edit_profile.html"> <i class="fas fa-square"></i>ویرایش پروفایل</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/candidate_favourite_job.html"> <i class="fas fa-square"></i>شغل موردعلاقه</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/candidate_resume.html"> <i class="fas fa-square"></i>رزومه</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/message.html"> <i class="fas fa-square"></i>پیام</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/pricing_plans.html"> <i class="fas fa-square"></i>برنامه های قیمت گذاری</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#"><i class="fas fa-square"></i>شرکت<span><i class="fas fa-chevron-right"></i>
									</span></a>
                                <ul class="dropdown-menu-right">
                                    <li>
                                        <a href="../dashboard/comp_applications.html"> <i class="fas fa-square"></i>برنامه ها </a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/comp_company_page.html"> <i class="fas fa-square"></i> صفحه شرکت</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/comp_employer_dashboard.html"> <i class="fas fa-square"></i>داشبورد</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/comp_employer_edit_profile.html"> <i class="fas fa-square"></i>ویرایش پروفایل</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/comp_employer_manage_jobs.html"> <i class="fas fa-square"></i>مدیریت مشاغل</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/comp_post_new_job.html"> <i class="fas fa-square"></i>ارسال شغل جدید</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/message.html"> <i class="fas fa-square"></i>پیام</a>
                                    </li>
                                    <li>
                                        <a href="../dashboard/pricing_plans.html"> <i class="fas fa-square"></i>برنامه های قیمت گذاری</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">وبلاگ</a>
                        <ul class="navi_2_dropdown">
                            <li class="parent">
                                <a href="blog_single.html"> <i class="fas fa-square"></i>وبلاگ تنها</a>
                            </li>
                            <li class="parent">
                                <a href="blog_category_right_sidebar.html"> <i class="fas fa-square"></i>دسته بندی وبلاگ</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact_us.html" class="gc_main_navigation">تماس</a></li>

                </ul>
            </div>
            <!-- mainmenu end -->
            <div class="jb_search_btn_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <!-- Quik search -->
                <div class="dez-quik-search bg-primary-dark">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="برای جستجو تایپ کنید ...">
                        <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- navi wrapper End -->
<!-- top header wrapper start -->
<div class="page_title_section">

    <div class="page_header">
        <div class="container">
            <div class="row">
                <!-- section_heading start -->
                <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                    <h1>@yield('title')</h1>
                </div>
                <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="#"> خانه </a>&nbsp; / &nbsp; </li>
                            <li>@yield('title')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top header wrapper end -->
@yield('content')
<!-- news app wrapper start-->
<div class="news_letter_wrapper jb_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="job_newsletter_wrapper jb_cover">
                    <div class="jb_newslwtteter_left">
                        <h2> به دنبال یک شغل</h2>
                        <p>سطح بعدی شما دارایی های شرکت توسعه محصول سطح بعدی شما محصول </p>
                    </div>
                    <div class="jb_newslwtteter_button">
                        <div class="header_btn search_btn news_btn jb_cover">

                            <a href="#">تایید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news app wrapper end-->
<!-- footer Wrapper Start -->
<div class="footer jb_cover">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footerNav jb_cover">
                    <a href="#"><img src="{{ asset("assets/images/logo2.png") }}" alt="img"></a>
                    <ul class="footer_first_contact">
                        <li><i class="flaticon-location-pointer"></i>
                            <p>123 خیابان شهری، طبقه 10،
                                <br> تهران، ایران.
                            </p>
                        </li>
                        <li><i class="flaticon-telephone"></i>
                            <p>1 -234 -456 -7890
                                <br> 1 -234 -456 -7890</p>
                        </li>
                        <li><i class="flaticon-envelope"></i><a href="#">info@Jbdesks.com </a>
                            <br>
                            <a href="#">support@Jbdesks.com</a>
                        </li>

                    </ul>

                    <ul class="icon_list_news jb_cover">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footerNav jb_cover footer_border_displ">
                    <h5>ویژگی ها</h5>
                    <ul class="nav-widget">
                        <li><a href="#"><i class="fa fa-square"></i>مدیریت کار و صورتحساب
                            </a></li>

                        <li><a href="#"><i class="fa fa-square"></i>پیگیری زمان و مواد
                            </a></li>

                        <li><a href="#"><i class="fa fa-square"></i>پیروی از استانداردها
                            </a></li>

                        <li><a href="#"><i class="fa fa-square"></i>ردیابی GPS در زمان واقعی
                            </a></li>

                        <li><a href="#"><i class="fa fa-square"></i>پورتال مشتری
                            </a></li>

                        <li><a href="#"><i class="fa fa-square"></i> گردش کار قدرتمند</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footerNav float_left footer_border_displ">
                    <h5>مرور</h5>
                    <ul class="nav-widget">

                        <li><a href="#"><i class="fa fa-square"></i>مترجمان آزاد بر اساس دسته</a></li>

                        <li><a href="#"><i class="fa fa-square"></i> مترجمان آزاد در آمریکا </a></li>

                        <li><a href="#"><i class="fa fa-square"></i> مترجمان آزاد در انگلیس</a></li>

                        <li><a href="#"><i class="fa fa-square"></i> مترجمان آزاد در کانادا</a></li>
                        <li><a href="#"><i class="fa fa-square"></i> مترجمان آزاد در هند</a></li>
                        <li><a href="#"><i class="fa fa-square"></i> پیدا کردن شغل</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="footerNav float_left footer_border_displ">
                    <h5>برنامه و ادغام</h5>
                    <ul class="nav-widget">
                        <li>
                            <a href="#"><img src="{{ asset("assets/images/ft1.png") }}" alt="img">Xero
                            </a>
                        </li>

                        <li>
                            <a href="#"><img src="{{ asset("assets/images/ft2.png") }}" alt="img">Reckon
                            </a>
                        </li>

                        <li>
                            <a href="#"><img src="{{ asset("assets/images/ft3.png") }}" alt="img">Flexidocs
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset("assets/images/ft4.png") }}" alt="img">Microsoft Exchange</a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset("assets/images/ft5.png") }}" alt="img"> Mailchimp
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset("assets/images/ft6.png") }}" alt="img"> MYOB
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="copyright_left"><i class="fa fa-copyright"></i> 2019 <a href="#">  جاب دسک.  </a> همه حقوق محفوظ است.
            </div>

            <div class="clearfix"></div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop gradient-color">
            <div class="wave waveTop"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom"></div>
        </div>
    </div>

</div>

<!-- footer Wrapper End -->
<!-- chat box Wrapper start -->
<div id="chat-circle" class="btn btn-raised">
    <i class="fas fa-comment-alt"></i>
</div>
<div class="chat-box">
    <div class="chat-box-header">
        باکس چت
        <span class="chat-box-toggle"><i class="fas fa-times"></i></span>
    </div>
    <div class="chat-box-body">
        <div class="chat-box-overlay">
        </div>
        <div class="chat-logs">

        </div>
        <!--chat-log -->
    </div>
    <div class="chat-input">
        <form>
            <input type="text" id="chat-input" placeholder="ارسال یک پیام..." />
            <button type="submit" class="chat-submit" id="chat-submit"><i class="fas fa-paper-plane"></i></button>
        </form>
    </div>
</div>
<!-- chat box Wrapper end -->
<!--custom js files-->
<script src="{{ asset("assets/js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/js/modernizr.js") }}"></script>
<script src="{{ asset("assets/js/jquery.menu-aim.js") }}"></script>
<script src="{{ asset("assets/js/plugin.js") }}"></script>
<script src="{{ asset("assets/js/owl.carousel.js") }}"></script>
<script src="{{ asset("assets/js/jquery.countTo.js") }}"></script>
<script src="{{ asset("assets/js/jquery-ui.js") }}"></script>
<script src="{{ asset("assets/js/dropify.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.magnific-popup.js") }}"></script>
<script src="{{ asset("assets/js/jquery.inview.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.nice-select.min.js") }}"></script>
<script src="{{ asset("assets/js/imagesloaded.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("assets/js/custom.js") }}"></script>
<!-- custom js-->
</body>


</html>
{{--<!doctype html>--}}
{{--<html lang="">--}}
{{--<head>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
