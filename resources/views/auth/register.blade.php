@extends('layouts.app')
@section('title', 'ثبت‌نام')
@section('content')
    <!-- sign up wrapper start -->
    <div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    @if (count($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="login_top_box jb_cover">
                        <div class="login_banner_wrapper">
                            <img src="{{ asset("assets/images/logo.png") }}" alt="logo">
                            <div class="header_btn search_btn facebook_wrap jb_cover">

                                <a href="#">ورود با فیسبوک <i class="fab fa-facebook-f"></i></a>

                            </div>
                            <div class="header_btn search_btn google_wrap jb_cover">

                                <a href="#">ورود با پینترست <i class="fab fa-pinterest-p"></i></a>

                            </div>
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>یا</h1>
                            </div>
                        </div>
                        <div class="login_form_wrapper">
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h2>ثبت نام</h2>
                            <div class="form-group icon_form comments_form">

                                <input type="text" class="form-control require" name="name" placeholder="نام کامل*">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group icon_form comments_form">

                                <input type="text" class="form-control require" name="email" placeholder="آدرس ایمیل*">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group icon_form comments_form">

                                <input type="password" class="form-control require" name="password" placeholder="رمزعبور *">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="form-group icon_form comments_form">

                                <input type="password" class="form-control require" name="password_confirmation" placeholder="تکرار رمزعبور *">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">
                                <button>ثبت نام</button>
                            </div>
                            <div class="dont_have_account jb_cover">
                                <p>قبلا ثبت‌نام کرده‌اید؟ <a href="{{ route('login') }}">از اینجا وارد شوید</a></p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up wrapper end -->
@endsection
