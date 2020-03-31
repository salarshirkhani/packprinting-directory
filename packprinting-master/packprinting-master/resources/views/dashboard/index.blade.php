@extends('layouts.dashboard')
@section('title', __('داشبورد'))
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_listing_left_fullwidth jb_cover">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                        <div class="jp_job_post_side_img">
                            <img src="{{ asset('assets/images/pf1.jpg') }}" alt="post_img">

                        </div>
                        <div class="jp_job_post_right_cont">
                            <h4>{{ Auth::user()->name }}</h4>

                            <ul>
                                <li><i class="fas fa-suitcase"></i>&nbsp; شرکت نرم افزاری</li>
                                <li><i class="flaticon-location-pointer"></i>&nbsp; تهران</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="jp_job_post_right_btn_wrapper jb_cover">
                            <div class="header_btn search_btn jb_cover">
                                <a href="#">مشاهده پروفایل</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> اطلاعات پایه</h1>
                </div>
                <div class="job_overview_header jb_cover">

                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="far fa-calendar"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>شرح شغل:</li>
                                <li>طراح گرافیک</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>موقعیت:</li>
                                <li>لس آنجلس کالیفرنیا</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>تلفن:</li>
                                <li>0145636941:</li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>ایمیل:</li>
                                <li><a href="#">luca@example.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                        <div class="jp_listing_list_icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="jp_listing_list_icon_cont_wrapper">
                            <ul>
                                <li>وب سایت:</li>
                                <li><a href="#">www.example.com</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> پروفایل اجتماعی</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> موقعیت ما</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div id='map'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="emp_job_post jb_cover">
                        <div class="emp_job_side_img">
                            <i class="fas fa-book"></i>

                        </div>
                        <div class="emp_job_side_text">
                            <h1>260</h1>
                            <p>مشاغل درخواست شده</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="emp_job_post jb_cover">
                        <div class="emp_job_side_img greens">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="emp_job_side_text">
                            <h1>11,200</h1>
                            <p>شرکت های مشاهده شده</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="emp_job_post jb_cover">
                        <div class="emp_job_side_img parts">
                            <i class="fas fa-envelope-open-text"></i>

                        </div>
                        <div class="emp_job_side_text">
                            <h1>1,608</h1>
                            <p>مشاغل مورد علاقه</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="job_filter_category_sidebar jb_cover">
                <div class="job_filter_sidebar_heading jb_cover">
                    <h1> فعالیت اخیر</h1>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>رزومه ما به روز شده! آرش مقاله ای منتشر کرد
                                </h4>

                                <ul>
                                    <li>5 ساعت پیش</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>آرش مقاله ای منتشر کرد
                                </h4>

                                <ul>
                                    <li>2 ساعت پیش</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>آرش مقاله ای منتشر کرد
                                </h4>

                                <ul>
                                    <li>4 ساعت پیش</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="job_overview_header apps_wrapper jb_cover">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="activity_app">
                                <i class="fas fa-angle-right"></i>
                            </div>

                            <div class="activity_logos">
                                <h4>رزومه شما به روز شد!
                                </h4>

                                <ul>
                                    <li>2 ساعت پیش</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
