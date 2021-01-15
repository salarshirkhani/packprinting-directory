<!DOCTYPE html>

<html lang="fa_IR">
<!--[endif]-->

<head>
    @include('partials.header')

<body>
    @include('partials.mainnavbar')

    <!-- preloader Start -->
    <!-- preloader Start -->
       <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">

                        <h1>{{$companies->name}}</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> خانه </a>&nbsp; / &nbsp; </li>
                                <li>{{$companies->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!-- company details wrapper start-->
    <div class="company_details_wrapper jb_cover">
    </div>
    <div class="webstrot_tech_detail jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_listing_left_fullwidth jb_cover">
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                <div class="jp_job_post_side_img">
                                    <img src="{{Storage::url($companies->logo)}}" style="height:100px; width:100px;" alt="{{$companies->name}}">

                                </div>
                                <div class="jp_job_post_right_cont web_text">
                                    <h4>{{$companies->name}}</h4>

                                    <ul>
                                        <li><i class="flaticon-location-pointer"></i>&nbsp;{{$companies->city}}</li>
                                        <li><i class="fa fa-th-large"></i>&nbsp; {{$companies->category->name}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                                <div class="jp_job_post_right_btn_wrapper web_single_btn">
                                    <ul>
                                        <li>
                                            <div class="job_adds_right">
                                                <a href="#!"><i class="far fa-heart"></i></a>
                                            </div>
                                        </li>
                                        <li><a href="#">ارسال پیغام </a></li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">توضیح کوتاه راجب شرکت</h2>
                        {{$companies->short_description}}
                        </div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">درباره ی ما</h2>
                            {!!$companies->content!!}</div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">ویدئوی معرفی</h2>
                            <div class="prs_video_sec_icon_wrapper jb_cover">
                                <div class="video_img_overlay"></div>
                                <ul>
                                    <li>
                                        <a class="test-popup-link button" rel='external' href='{{Storage::url($companies->video)}}' title='title'><i class="flaticon-play-button"></i></a>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="jp_job_res jp_listing_left_wrapper jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li>اشتراک :</li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related_job_wrapper jb_cover">
                        <h1 class="related_job">محصولات</h1>
                        <div class="related_product_job cmpny_related_jobs jb_cover">

                            <div class="owl-carousel owl-theme">
                                <div class="item">

                                    <div class="job_listing_left_fullwidth cmpny_single_slidr jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/lt2.png" alt="post_img" />
                                                    <br> <span>گوگل</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">نیمه وقت</a></li>
                                                        <li> <a href="#">درخواست</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/lt1.png" alt="post_img" />
                                                    <br> <span>گوگل</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح تجربه سیستم های قدرتمند </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">نیمه وقت</a></li>
                                                        <li> <a href="#">درخواست</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/lt5.png" alt="post_img" />
                                                    <br> <span>گوگل</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">نیمه وقت</a></li>
                                                        <li> <a href="#">درخواست</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">

                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/lt2.png" alt="post_img" />
                                                    <br> <span>گوگل</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">نیمه وقت</a></li>
                                                        <li> <a href="#">درخواست</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/lt1.png" alt="post_img" />
                                                    <br> <span>گوگل</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح تجربه سیستم های قدرتمند </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">نیمه وقت</a></li>
                                                        <li> <a href="#">درخواست</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="images/lt5.png" alt="post_img" />
                                                    <br> <span>گوگل</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">نیمه وقت</a></li>
                                                        <li> <a href="#">درخواست</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> بررسی شرکت</h1>
                        </div>
                        <div class="job_overview_header jb_cover">

                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>دسته بندی های شرکت:</li>
                                        <li>{{$companies->category->name}}</li>
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
                                        <li>{{$companies->city}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>خط تلفن::</li>
                                        <li>{{$companies->number}}</li>
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
                                        <li><a href="#">{{$companies->creator->email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-globe-asia"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>وب سایت:</li>
                                        <li><a href="#">{{$companies->website}}</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">

                                <a href="#">تماس با ما</a>

                            </div>

                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> موقعیت ما</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div id='map'>
                            </div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> پروفایل اجتماعی</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li></li>
                                    <li><a href="https://facebook.com/{{$companies->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/{{$companies->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com/{{$companies->instagram}}"><i class="fab fa-instagram"></i></a></li>

                                    <li><a href="https://telegram.me/{{$companies->telegram}}"><i class="fab fa-telegram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!--job listing filter  wrapper end-->
    <!-- news app wrapper start-->
    @include('partials.message')

    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    @include('partials.footer')

    <script>
        function initMap() {
            var uluru = {
                lat: -36.742775,
                lng: 174.731559
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi2zbxXa0ObGqaSBo5NJMdwLs_xtQ03nI&amp;callback=initMap"></script>
</body>

</html>