<!DOCTYPE html>
<!-- 
Template Name: JB desks
Version: 1.0.0
Author: 

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fa_IR">
<!--[endif]-->

<head>
    @include('partials.header')

<body>
    @include('partials.mainnavbar')

    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">

            <div class="row">
                @include('partials.mainsidebar')

                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">

                            <select>
                                <option>مرتب سازی بر اساس</option>
                                <option>جدید ترین</option>
                                <option>محبوب ترین</option>
                                <option>بالاترین امتیاز</option>
                            </select>

                            <div class="list-grid">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#grid"> <i class="flaticon-four-grid-layout-design-interface-symbol"></i></a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#list"><i class="flaticon-list"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="showpro">
                                <p>شما نگاهی به 01 تا 20 دارید</p>
                            </div>
                        </div>
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal01">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal01" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-01" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt2.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal02">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal02" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-02" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt5.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal09">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal09" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-09" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt3.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal03">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal03" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-03" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal05">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal05" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-05" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal04">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal04" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-04" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt5.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal051">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal051" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-051" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal06">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal06" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-06" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt2.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal07">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal07" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-07" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal061">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal061" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-061" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal011">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal011" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-011" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt3.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; لس آنجلس، کالیفرنیا 455001</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                            <li>
                                                                <div class="job_adds_right">
                                                                    <a href="#!"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li><a href="job_single.html">نیمه وقت</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal08">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal08" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-08" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal1">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal1" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal2">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal2" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-2" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal3">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal3" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-3" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt5.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal8">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal8" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-8" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt1.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">طراحی تجربه سیستم های قدرتمند </a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal4">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal4" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-4" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal5">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal5" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-5" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal6">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal6" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-6" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="images/lt4.png" alt="post_img" />
                                                        <br> <span>گوگل</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="#">کارآموز طراح وب (تازه)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; 12هزار - 15هزار</li>
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
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal7">پاسخ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal7" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                        <div class="apply_job jb_cover">
                                                                            <h1>درخواست برای این کار :</h1>
                                                                            <div class="search_alert_box jb_cover">

                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="name" placeholder="نام کامل">
                                                                                </div>
                                                                                <div class="apply_job_form">

                                                                                    <input type="text" name="Email" placeholder="ایمیل خود را وارد کنید">
                                                                                </div>
                                                                                <div class="apply_job_form">
                                                                                    <textarea class="form-control" name="message" placeholder="پیام"></textarea>
                                                                                </div>

                                                                                <div class="resume_optional jb_cover">
                                                                                    <p>رزومه (اختیاری)</p>
                                                                                    <div class="width_50">
                                                                                        <input type="file" id="input-file-now-custom-7" class="dropify" data-height="90" /><span class="post_photo">آپلود رزومه</span>
                                                                                    </div>
                                                                                    <p class="word_file"> مایکروسافت ورد یا فایل پی دی اف فقط (5 مگابایت)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

                                                                                <a href="#">درخواست کنید</a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                                <ul>
                                    <li>
                                        <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                    </li>
                                    <li><a href="#">1</a>
                                    </li>
                                    <li class="third_pagger"><a href="#">2</a>
                                    </li>
                                    <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                                    </li>

                                    <li>
                                        <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>مشاغل بر اساس طبقه بندی</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1111" name="cb">
                                <label for="c1111">طراح گرافیک<span> (155)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c22" name="cb">
                                <label for="c22">
                                   مشاغل مهندسی <span> (514)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c33" name="cb">
                                <label for="c33">مشاغل اصلی <span> (554)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c44" name="cb">
                                <label for="c44">مشاغل حقوقی <span> (457)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c55" name="cb">
                                <label for="c55">مشاغل آی تی <span> (254)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c66" name="cb">
                                <label for="c66">مشاغل پرکاربرد <span> (1054)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c77" name="cb">
                                <label for="c77">مشاغل دولتی <span> (1284)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>مشاغل بر اساس موقعیت</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c011" name="cb">
                                <label for="c011">مشاغل در دهلی
                                    <span> (24)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c021" name="cb">
                                <label for="c021">
                                    مشاغل در بمبئی
                                    <span> (1242)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c031" name="cb">
                                <label for="c031">مشاغل در چنای
                                    <span>(458)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c041" name="cb">
                                <label for="c041">مشاغل در دبی
                                    <span> (1047)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c051" name="cb">
                                <label for="c051">مشاغل در نپال <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c061" name="cb">
                                <label for="c061">مشاغل در پونه <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c071" name="cb">
                                <label for="c071">مشاغل در بنگلور <span> (124)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>مهارت های شما</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c111" name="cb">
                                <label for="c111">جاوااسکریپت
                                    <span> (124)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c121" name="cb">
                                <label for="c121">
                                    HTML5
                                    <span> (42)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c131" name="cb">
                                <label for="c131">CSS
                                    <span>(158)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c141" name="cb">
                                <label for="c141">بازاریابی
                                    <span> (47)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c151" name="cb">
                                <label for="c151">طراحی وب <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c161" name="cb">
                                <label for="c161">پی اچ پی<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c171" name="cb">
                                <label for="c171">رسانه های اجتماعی<span> (124)</span> </label>
                            </p>

                            <div class="seeMore"><a href="#">مشاهده تمام دسته ها</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>حقوق</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <div class="widget price-range">
                                <ul>
                                    <li class="range">
                                        <div id="responsive_range_price" class="range-box"></div>

                                        <input type="text" id="responsive_price" class="price-box" readonly/>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="jp_add_resume_wrapper jb_cover">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="images/logo2.png" alt="logo" />
                            <h4>دریافت بهترین کارهای مرتبط در ایمیل شما. اضافه کردن رزومه حالا!</h4>
                            <div class="width_50">
                                <input type="file" id="input-file-now-custom-203" class="dropify" data-height="90" /><span class="post_photo">افزودن رزومه</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--job listing filter  wrapper end-->
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
                        <a href="#"><img src="images/logo2.png" alt="img"></a>
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
                                <a href="#"><img src="images/ft1.png" alt="img">Xero
                                </a>
                            </li>

                            <li>
                                <a href="#"><img src="images/ft2.png" alt="img">Reckon
                                </a>
                            </li>

                            <li>
                                <a href="#"><img src="images/ft3.png" alt="img">Flexidocs
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/ft4.png" alt="img">Microsoft Exchange</a>
                            </li>
                            <li>
                                <a href="#"><img src="images/ft5.png" alt="img"> Mailchimp
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/ft6.png" alt="img"> MYOB
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
    <script>
    </script>
</body>


</html>