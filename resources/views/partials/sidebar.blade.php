<div class="emp_dashboard_sidebar jb_cover">
    <img src="{{ asset('assets/images/profile.jpg') }}" class="img-responsive" alt="post_img" />
    <div class="emp_web_profile candidate_web_profile jb_cover">

        <h4>{{ Auth::user()->name }}</h4>
        <p>{{ Auth::user()->email }}</p>
    </div>
    <div class="emp_follow_link jb_cover">
        <ul class="feedlist">
            <li><a href="candidate_dashboard.html"><i class="fas fa-tachometer-alt"></i> داشبورد </a></li>
            <li>
                <a href="candidate_edit_profile.html"> <i class="fas fa-edit"></i>ویرایش پروفایل
                </a>
            </li>
            <li><a href="candidate_resume.html" class="link_active"><i class="fas fa-file"></i>رزومه </a></li>
            <li><a href="candidate_favourite_job.html"><i class="fas fa-heart"></i>موردعلاقه</a></li>
            <li><a href="candidate_applied_job.html"><i class="fas fa-check-square"></i>شغل درخواستی</a></li>
            <li><a href="message.html"><i class="fas fa-envelope"></i>پیام</a></li>

            <li><a href="pricing_plans.html"><i class="fas fa-tag"></i>طرح های قیمت گذاری</a></li>
        </ul>
        <ul class="feedlist logout_link jb_cover">
            <li><a href="#"><i class="fas fa-power-off"></i> خروج  </a></li>
            <li>
                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-trash-alt"></i>حذف پروفایل
                </a>
            </li>

        </ul>
    </div>
</div>

{{--<div class="modal fade delete_popup" id="myModal" role="dialog">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-12">--}}

{{--                    <div class="delett_cntn jb_cover">--}}
{{--                        <h1><i class="fas fa-trash-alt"></i> حذف حساب</h1>--}}
{{--                        <p>شما مطمئن هستید! شما میخواهید پروفایل خود را حذف کنید.--}}
{{--                            <br> نمی تواند برگردانده شود!</p>--}}

{{--                        <div class="delete_jb_form">--}}

{{--                            <input type="password" name="password" placeholder="رمز عبور را وارد کنید">--}}
{{--                        </div>--}}
{{--                        <div class="header_btn search_btn applt_pop_btn">--}}

{{--                            <a href="#">ذخیره به روزرسانی</a>--}}

{{--                        </div>--}}
{{--                        <div class="cancel_wrapper">--}}
{{--                            <a href="#" class="" data-dismiss="modal">لغو</a>--}}
{{--                        </div>--}}
{{--                        <div class="login_remember_box jb_cover">--}}
{{--                            <label class="control control--checkbox">شما شرایط و ضوابط <a href="#">و حریم خصوصی </a> ما را <a href="#">میپذیرید</a>--}}
{{--                                <input type="checkbox">--}}
{{--                                <span class="control__indicator"></span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
