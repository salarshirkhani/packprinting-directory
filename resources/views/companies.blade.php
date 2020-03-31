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
                                                            <li><a href="job_single.html">مشاهده صفحه</a></li>
                                                            <li> <a href="#" >مشاهده پروفایل مدیر</a></li>
                                                        </ul>
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
    </div></div></div>
    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    @include('partials.footer')

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