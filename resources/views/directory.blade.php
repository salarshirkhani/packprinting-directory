<!DOCTYPE html>
<!-- 
Version: 1.0.0
Author: salar shirkhani

-->

<html lang="fa_IR">


@include('partials.header')

<body>
    @include('partials.mainnavbar')
    <!-- navi wrapper End -->
    <!-- slider wrapper Start -->
    <div class="main_slider_wrapper slider-area jb_cover">
        <div class="mains_slider_shaper">
            <img src="{{asset('dir/images/slider_bg.png')}}" class="img-responsive" alt="img">
        </div>
        <div class="slider_small2_shape">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive " alt="img">
        </div>
        <div class="slider_shape_smt bubble-1">
            <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive " alt="img">
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">
                                        <div class="slider_shape_smt1 bubble-2">
                                            <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive " alt="img">
                                        </div>
                                        <h2 data-animation="animated fadeInUp" style="font-size:43px;">بانک اطلاعاتی صنایع چاپ و بسته بندی و صنایع وابسته</h2>

                                        <p data-animation="animated fadeInUp">کامل ترین بانک اطلاعاتی صنایع چاپ و بسته بندی و صنایع وابسته</p>
                                        <div data-animation="animated fadeInUp" class="btn_hover slider_btn">
                                            <a href="#">ثبت نام رایگان</a>
                                        </div>
                                       
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_shape_sm3 bubble-3">
                                        <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive " alt="img">
                                    </div>
                                    <div class="slider_side_img jb_cover">
                                        <img src="{{asset('dir/images/slider_img.png')}}" class="img-responsive" alt="img">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">
                                        <div class="slider_shape_smt1 bubble-4">
                                            <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                        </div>
                                         <h2 data-animation="animated fadeInUp" style="font-size:43px;">بانک اطلاعاتی صنایع چاپ و بسته بندی و صنایع وابسته</h2>

                                        <p data-animation="animated fadeInUp">کامل ترین بانک اطلاعاتی صنایع چاپ و بسته بندی و صنایع وابسته</p>
                                        <div data-animation="animated fadeInUp" class="btn_hover slider_btn">
                                            <a href="#">ثبت نام رایگان</a>
                                        </div>
                                        <div data-animation="animated fadeInUp" class="slider_icon_list">
                                           
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_shape_sm3 bubble-5">
                                        <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                    </div>
                                    <div class="slider_side_img jb_cover">
                                        <img src="{{asset('dir/images/slider_img.png')}}" class="img-responsive" alt="img">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">
                                        <div class="slider_shape_smt1 bubble-6">
                                            <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                        </div>
                                         <h2 data-animation="animated fadeInUp" style="font-size:43px;">بانک اطلاعاتی صنایع چاپ و بسته بندی و صنایع وابسته</h2>

                                        <p data-animation="animated fadeInUp">کامل ترین بانک اطلاعاتی صنایع چاپ و بسته بندی و صنایع وابسته</p>
                                        <div data-animation="animated fadeInUp" class="btn_hover slider_btn">
                                            <a href="#">ثبت نام رایگان</a>
                                        </div>
                                        <div data-animation="animated fadeInUp" class="slider_icon_list">
                                           
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider_shape_sm3 bubble-7">
                                        <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                    </div>
                                    <div class="slider_side_img jb_cover">
                                        <img src="{{asset('dir/images/slider_img.png')}}" class="img-responsive" alt="img">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                    </li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"><i class="flaticon-left-arrow"></i>
					</a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"><i class="flaticon-right-arrow"></i>
					</a>
                </div>
            </div>
        </div>
        <div class="slider_small_shape">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive" alt="img">
        </div>
    </div>
    <!-- slider wrapper End -->
    <!--services wrapper start-->
    <div class="index3_form_wrapper jb_cover">
        <div class="slider_small3_shape">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="index3_form_box jb_cover">
                        <div class="select_box select_box3">

                            <select>
                                <option>دسته بندی</option>
                                <option>املاک و مستغلات</option>
                                <option>الکترونیک</option>
                                <option>بازاریابی</option>
                                <option>آموزش</option>

                            </select>

                        </div>
                        <div class="select_box select_box3">

                            <select>
                                <option>زیر دسته</option>
                                <option>معلم</option>
                                <option>بازاریابی</option>
                                <option>دکتر</option>
                                <option>گرافیک</option>

                            </select>

                        </div>
                        <div class="select_box select_box3">

                            <select>
                                <option>موقعیت</option>
                                <option>تهران</option>
                                <option>اصفهان</option>
                                <option>مشهد</option>
                                <option>شیراز</option>

                            </select>

                        </div>
                        <div class="contect_form3 contct_form_new3">

                            <input type="text" name="name" placeholder="کلمه کلیدی">
                        </div>
                        <div class="index3_form_search">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--service wrapper end-->
    <!-- best jobs wrapper start-->
    <div class="best_jobs_wrapper index3_best_job_wrapper  jb_cover">
        <div class="line_shape">
            <img src="{{asset('dir/images/line.png')}}" class="img-responsive" alt="img">
        </div>
		 <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>دسته بندی مشاغل صنعت بسته بندی
</h3>

                        <p>دسته بندی های مربوط به حوزه بسته بندی را در این بخش مشاهده کنید</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c1.png')}}" alt="img">
                        <h3><a href="#">بسته بندی/مواد اولیه ، قطعات ، تجهیزات  </a></h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c2.png')}}" alt="img">
                        <h3><a href="#">بسته بندی/ظروف </a></h3>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c7.png')}}" alt="img">
                        <h3><a href="#">بسته بندی / ماشین آلات و خطوط تولید </a></h3>

                    </div>
                </div>
             
            </div>
        </div>
		 <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>دسته بندی مشاغل صنعت چاپ
</h3>

                        <p>دسته بندی های مربوط به حوزه چاپ را در این بخش مشاهده کنید</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
					   <img src="{{asset('dir/images/c1.png')}}" alt="img">
                        <h3><a href="#">پیش از چاپ/ خدمات  </a></h3>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c3.png')}}" alt="img">
                        <h3><a href="#">چاپ/ خدمات </a></h3>

                    </div>
                </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c5.png')}}" alt="img">
                        <h3><a href="#">پس از چاپ/ خدمات </a></h3>

                    </div>
                </div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c2.png')}}" alt="img">
                        <h3><a href="#">پیش از چاپ/ ماشین آلات ، قطعات، مود اولیه </a></h3>

                    </div>
                </div>
                				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c4.png')}}" alt="img">
                        <h3><a href="#">چاپ/ ماشین آلات ، قطعات، مواد اولیه </a></h3>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="services_content jb_cover">
                        <img src="{{asset('dir/images/c6.png')}}" alt="img">
                        <h3><a href="#">پس از چاپ/ ماشین آلات ، قطعات، مواد اولیه </a></h3>

                    </div>
                </div>
               
            </div>
        </div>
      
        <div class="slider_small3_shape">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive" alt="img">
        </div>
    </div>
	
 <div class="services_wrapper control_wrapper jb_cover">
        <div class="slider_small_shape44">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive " alt="img">
        </div>
        <div class="counter_jbbb2 jb_cover">

            <img src="{{asset('dir/images/line3.png')}}" class="img-responsive" alt="img">
        </div>

    <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>دستچین ها</h3>

                        <p>شرکت ها و محصولات برگزیده صنایع چاپ و بسته بندی را در این بخش مشاهده کنید</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="latest_job_tabs index2_tab_wrapper index3_tab_wrapper jb_cover">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home">شرکت های دستچین</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#menu1">محصولات دستچین</a>
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="tab-content">
                        <div id="home" class="tab-pane active">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt5.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">ایمان صنعت </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt2.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح وب </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt3.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">توسعه پی اچ پی </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt4.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح گرافیک </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt5.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">نرم افزار انگلیسی. </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt3.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح تجربه کاربری </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="images/lt2.png" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح وب </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt3.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">توسعه پی اچ پی </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt4.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح گرافیک </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt5.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">نرم افزار انگلیسی. </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt5.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">wordpress developer</a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="job_listing_left_fullwidth job_listing_grid_wrapper index2_listing_jobs index3_listing_jobs jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="jp_job_post_side_img">
                                                    <img src="{{asset('dir/images/lt1.png')}}" alt="post_img" />

                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="#">طراح گرافیک </a></h4>

                                                    <ul>
                                                        <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار تومان</li>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; غرب تهران</li>
                                                    </ul>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_hover slider_btn jobs_btn_3 jb_cover">
                        <a href="#">مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_small3_shape">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive" alt="img">
        </div>

    </div>
    <!-- best jobs wrapper end-->
    <!-- counter wrapper start-->
    <div class="counter_wrapper counter_3_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_mockup_design jb_cover">

                        <img src="{{asset('dir/images/mockup6.png')}}" class="img-responsive" alt="img">
                    </div>
                    <div class="counter_jbbb jb_cover">

                        <img src="{{asset('dir/images/line2.png')}}" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_right_wrapper counter_index3_right jb_cover">
                        <h1>برخی از حقایق آماری</h1>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"><span class="timer">2500</span>
                                    <p class="con2">شرکت های بسته بندی </p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9425</span>
                                    <p class="con2">شرکت های چاپ</p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9</span><span>+</span>
                                    <p class="con2">مدیران موفق</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter wrapper end-->
    <!--services wrapper start-->
   
    <!--services wrapper end-->
    <!-- download app wrapper start-->
    <div class="download_wrapper index3_download jb_cover">
        <div class="line_shape">
            <img src="{{asset('dir/images/line.png')}}" class="img-responsive" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_mockup_design jb_cover">

                        <img src="{{asset('dir/images/mockup7.png')}}" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_app_store jb_cover">
                        <h1>صفحه اختصاصی</h1>
                        <h2>در بانک اطلاعاتی!</h2>
                        <p>صفحه اختصاصی داینامیک
                            <br> کنترل پنل اختصاصی</p>
                        <div class="btn_hover slider_btn">
                            <a href="#" class="btn_hover slider_btn" style="margin-left: 130px;
    margin-top: 25px;     float: left !important; "> ثبت نام</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download app wrapper end-->
    <!--clients wrapper start-->
    <div class="client_wrapper_top jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>مشتریان خوشحال ما
</h3>

                        <p>نظر برخی از مشتریان ماهنامه صنایع چاپ و بسته بندی</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="client_wrapper jb_cover">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                        <div class="client_wrapper_cntnt jb_cover">
                                            <div class="client_shap1 bubble-5">
                                                <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                            </div>
                                            <div class="client_shap2 bubble-7">
                                                <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                            </div>
                                            <img src="{{asset('dir/images/quote1.png')}}" alt="img">

                                            <h1><a href="#">حسینی</a> <span>(چسب رازی)</span></h1>

                                            <p>بسته ها و ویرایشگرهای وب در حال حاضر از لورم اپیزوم به عنوان متن مدل ایمیل خود و جستجو استفاده می کنند.</p>
                                            <div class="client_shap3 bubble-6">
                                                <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                        <div class="clinnt_slider_img jb_cover">
                                            <img src="{{asset('dir/images/vv.png')}}" class="img-responsive" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                                        <div class="client_wrapper_cntnt jb_cover">
                                            <div class="client_shap1 bubble-5">
                                                <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                            </div>
                                            <div class="client_shap2 bubble-7">
                                                <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                            </div>
                                            <img src="{{asset('dir/images/quote1.png')}}" alt="img">

                                            <h1><a href="#">حسینی</a> <span>(چسب رازی)</span></h1>

                                            <p>بسته ها و ویرایشگرهای وب در حال حاضر از لورم اپیزوم به عنوان متن مدل ایمیل خود و جستجو استفاده می کنند.</p>
                                            <div class="client_shap3 bubble-6">
                                                <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                        <div class="clinnt_slider_img jb_cover">
                                            <img src="{{asset('dir/images/vv.png')}}" class="img-responsive" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_small3_shape shapenew">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive" alt="img">
        </div>
    </div>
    <!--clients wrapper end-->
    <!--pricing table start-->
    <div class="pricing_table_3 jb_cover">
        <div class="line_shape">
            <img src="{{asset('dir/images/line.png')}}" class="img-responsive" alt="img">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>طرح قیمت گذاری را انتخاب کنید
</h3>

                        <p>پنل های ماهنامه صنایع چاپ و بسته بندی</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper index2_pricing_wrapper index3_pricing_wrapper jb_cover">
                        <h1>طرح پایه</h1>
                        <div class="main_pdet jb_cover">

                            <h2><span class="dollarr"> تومان </span> 19 <br> <span>/ هر ماه</span> </h2>

                        </div>

                        <ul class="pricing_list22">

                            <li>5 شغل ارسالی
                            </li>
                            <li>2 شغل ویژه
                            </li>
                            <li>
                                1 تجدید شغل

                            </li>
                            <li>مدت 10 روز
                            </li>
                            <li>هشدار ایمیل

                            </li>

                        </ul>
                        <a href="#" class="price_btn">انتخاب طرح</a>

                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper index2_pricing_wrapper index3_pricing_wrapper jb_cover">
                        <h1>طرح پرمیوم</h1>
                        <div class="main_pdet jb_cover">

                            <h2><span class="dollarr"> تومان </span> 29 <br> <span>/ هر ماه</span> </h2>

                        </div>
                        <ul class="pricing_list22">
                            <li>5 شغل ارسالی
                            </li>
                            <li>2 شغل ویژه
                            </li>
                            <li>
                                1 تجدید شغل

                            </li>
                            <li>مدت 10 روز
                            </li>
                            <li>هشدار ایمیل

                            </li>

                        </ul>
                        <a href="#" class="price_btn">انتخاب طرح</a>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper index2_pricing_wrapper index3_pricing_wrapper jb_cover">
                        <h1>طرح پرمیوم</h1>
                        <div class="main_pdet jb_cover">

                            <h2><span class="dollarr"> تومان </span> 59 <br> <span>/ هر ماه</span> </h2>

                        </div>
                        <ul class="pricing_list22">
                            <li>5 شغل ارسالی
                            </li>
                            <li>2 شغل ویژه
                            </li>
                            <li>
                                1 تجدید شغل

                            </li>
                            <li>مدت 10 روز
                            </li>
                            <li>هشدار ایمیل

                            </li>

                        </ul>
                        <a href="#" class="price_btn">انتخاب طرح</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="counter_jbbb2 jb_cover">

            <img src="{{asset('dir/images/line3.png')}}" class="img-responsive" alt="img">
        </div>
    </div>
    <!--pricing table end-->
    <!--popular wrapper start-->
    <div class="popular_wrapper jb_cover">
        <div class="slider_small3_shape shapenew">
            <img src="{{asset('dir/images/shape4.png')}}" class="img-responsive " alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>ما همه جا محبوب هستیم
</h3>

                        <p>در این بخش میتوانید در سایت ما ثبت نام کنید</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="jp_register_section_main_wrapper jb_cover">
                        <div class="jp_regis_left_side_box_wrapper">
                            <div class="jp_regis_left_side_box">
                                <i class="flaticon-laptop"></i>
                                <h4>من  مدیر هستم</h4>
                                <p>شما می توانید به عنوان یکی از مدیران موفق در <br>صنعت چاپ و بسته بندی در سایت ما ثبت نام کنید</p>
                                <ul>
                                    <li><a href="#" class="price_btn regis_btn"> ثبت نام مدیر موفق</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_regis_right_side_box_wrapper">

                            <div class="jp_regis_right_side_box">
                                <i class="flaticon-doctor"></i>
                                <h4>من شخص حقوقی هستم</h4>
                                <p>شما می توانید شرکت خود را در سایت ما ثبت کرده
                                    <br>و از امکانات ما برای نمایش شرکت و محصولات خود استفاده کنید</p>
                                <ul>
                                    <li><a href="#" class="price_btn regis_btn">ثبت شرکت </a></li>
                                </ul>
                            </div>
                            <div class="jp_regis_center_tag_wrapper">
                                <p>یا</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--popular wrapper end-->
    <!--resume wrapper start-->
    <div class="pricing_table_3 recent_resume_wrapper jb_cover">
        <div class="slider_small_shape44">
            <img src="{{asset('dir/images/p2.png')}}" class="img-responsive " alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>گلادیاتورهای عرصه چاپ و بسته بندی
</h3>

                        <p>مدیران موفق در صنعت چاپ و بسته بندی</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="jp_recent_resume_box_wrapper jb_cover">
                        <div class="jp_recent_resume_img_wrapper">
                            <img src="{{asset('dir/images/cmnt4.jpg')}}" alt="resume_img" />
                        </div>
                        <div class="jp_recent_resume_cont_wrapper">
                            <h3> <a href="#">آرش خادملو</a></h3>
                            <p><i class="far fa-folder-open"></i>مدیر شرکت چسب رازی</p>
                        </div>
                        <div class="jp_recent_resume_btn_wrapper">
                            <ul>
                                <li><a href="#">مشاهده پروفایل</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_recent_resume_box_wrapper jb_cover">
                        <div class="jp_recent_resume_img_wrapper">
                            <img src="{{asset('dir/images/cmnt1.jpg')}}" alt="resume_img" />
                        </div>
                        <div class="jp_recent_resume_cont_wrapper">
                            <h3><a href="#">آرش خادملو</a></h3>
                            <p><i class="far fa-folder-open"></i>مدیر شرکت چسب رازی</p>
                        </div>
                        <div class="jp_recent_resume_btn_wrapper">
                            <ul>
                                <li><a href="#">مشاهده پروفایل</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_recent_resume_box_wrapper jb_cover">
                        <div class="jp_recent_resume_img_wrapper">
                            <img src="{{asset('dir/images/cmnt2.jpg')}}" alt="resume_img" />
                        </div>
                        <div class="jp_recent_resume_cont_wrapper">
                            <h3><a href="#">آرش خادملو</a></h3>
                            <p><i class="far fa-folder-open"></i>مدیر شرکت چسب رازی</p>
                        </div>
                        <div class="jp_recent_resume_btn_wrapper">
                            <ul>
                                <li><a href="#">مشاهده پروفایل</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_recent_resume_box_wrapper jb_cover">
                        <div class="jp_recent_resume_img_wrapper">
                            <img src="{{asset('dir/images/cmnt3.jpg')}}" alt="resume_img" />
                        </div>
                        <div class="jp_recent_resume_cont_wrapper">
                            <h3> <a href="#">آرش خادملو</a></h3>
                            <p><i class="far fa-folder-open"></i>مدیر شرکت چسب رازی</p>
                        </div>
                        <div class="jp_recent_resume_btn_wrapper">
                            <ul>
                                <li><a href="#">مشاهده پروفایل</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="btn_hover slider_btn jobs_btn_3 vb jb_cover">
                    <a href="#">مشاهده همه</a>
                </div>
            </div>
        </div>
        <div class="counter_jbbb2 jb_cover">

            <img src="{{asset('dir/images/line3.jpg')}}" class="img-responsive" alt="img">
        </div>
    </div>
    <!--resume wrapper end-->
    <!-- news app wrapper start-->
    <div class="news_letter_wrapper shaa jb_cover">
        <div class="sha1 bubble-180">
            <img src="{{asset('dir/images/bubble2.png')}}" class="img-responsive " alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> همین الان ثبت نام کن</h2>
                            <p>همین الان در وب سایت ما ثبت نام کن تا از بهترین خدمات در حوزه چاپ و بسته بندی بهره مند شی</p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="btn_hover slider_btn jobs_btn_3">
                                <a href="#">ثبت نام</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sha2 bubble-185">
            <img src="images/bubble2.png" class="img-responsive " alt="img">
        </div>
    </div>
    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    <div class="footer index2_footer_wrapper footer_index3 shaa jb_cover">
        <div class="ft_shape bubble-18">
            <img src="{{asset('dir/images/bubble.png')}}" class="img-responsive " alt="img">
        </div>

        <div class="container">
            <div class="row">
        
                  
                
                <div class="copyright_left"><i class="fa fa-copyright"></i> 2020 <a href="http://salarshirkhani.ir">  سالار شیرخانی.  </a> همه حقوق محفوظ است.
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
  
  <!-- chat box Wrapper end -->
    <!--custom js files-->
    <script src="{{asset('dir/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('dir/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dir/js/modernizr.js')}}"></script>
    <script src="{{asset('dir/js/jquery.menu-aim.js')}}"></script>
    <script src="{{asset('dir/js/plugin.js')}}"></script>
    <script src="{{asset('dir/js/owl.carousel.js')}}"></script>
    <script src="{{asset('dir/js/jquery-ui.js')}}"></script>
    <script src="{{asset('dir/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('dir/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('dir/js/dropify.min.js')}}"></script>
    <script src="{{asset('dir/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('dir/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('dir/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('dir/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('dir/js/custom.js')}}"></script>
    <!-- custom js-->
</body>


<!-- Mirrored from webstrot.com/html/jbdesk/main_pages/index_III.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 05:18:09 GMT -->
</html>