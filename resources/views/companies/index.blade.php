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
                                    @foreach($companies as $post)
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                    <img src="{{Storage::url($post->logo)}}" style="height:100px; width:100px;"alt="{{$post['name']}}" />
                                                        <br> 
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                    <h4><a href="{{url('companies/single',['id'=>$post->id,'name'=>$post->name])}}">{{$post['name']}}</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; {{$post['city']}}</li>
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
                                                            <li><a href="{{url('companies/single',['id'=>$post->id,'name'=>$post->name])}}">مشاهده شرکت</a></li>
                                                            <li> <a href="#" >مشاهده پروفایل مدیر</a></li>
                                                        </ul>
                                                    </div>
                                                    
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            <div class="blog_pagination_section jb_cover">
                                <ul>
                                  {{$companies->links()}}
                                </ul>
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

        
    
</body>


</html>