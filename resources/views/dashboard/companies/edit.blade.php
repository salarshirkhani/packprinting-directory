@extends('layouts.dashboard')
@section('title', __('ویرایش شرکت'))
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <form method="POST" action="{{ route('dashboard.companies.update', ['company' => $company]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @if (count($errors))
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            <div class="job_filter_sidebar_heading jb_cover">
                <h1>ویرایش شرکت</h1>
            </div>
            <div class="browse_img_banner jb_cover">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'نام شرکت',
                            'name' => 'name',
                            'value' => $company->name
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="select_box">
                            <label>دسته‌بندی</label>
                            <select name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @if(old('category_id', $company->category_id) == $category->id) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="jp_job_post_right_cont edit_profile_wrapper" style="margin-bottom: 25px; width: 100%">
                            <h4>لوگوی شرکت: JPEG یا PNG در اندازه 500x500px </h4>

                            <div class="width_50">
                                <input type="file" name="logo" id="input-file-now-custom-233" accept=".png,.jpg,.jpeg" class="dropify" data-height="90" />
                                <span class="post_photo">انتخاب تصویر</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="jp_job_post_right_cont edit_profile_wrapper" style="margin-bottom: 25px; width: 100%">
                            <h4>ویدیوی معرفی (اختیاری): MP4 (حداکثر ۳۰ مگابایت)</h4>

                            <div class="width_50">
                                <input type="file" name="video" id="input-file-now-custom-233" accept=".mp4" class="dropify" data-height="90" />
                                <span class="post_photo">انتخاب ویدیو</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contect_form3">
                            <label>توضیحات کوتاه</label>
                            <textarea style="height: 6em" rows="4" name="short_description">{{ old('short_description', $company->short_description) }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contect_form3">
                            <label>توضیحات</label>
                            <textarea style="height: 13em" rows="5" name="content">{{ old('content', $company->content) }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'استان',
                            'name' => 'province',
                            'value' => $company->province
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'شهر',
                            'name' => 'city',
                            'value' => $company->city
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'شماره‌تلفن',
                            'name' => 'number',
                            'type' => 'tel',
                            'value' => $company->number
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'آدرس',
                            'name' => 'address',
                            'value' => $company->address
                        ])
                    </div>
                    <div class="col-12">
                        @include('partials.form.text', [
                            'label' => 'آدرس وب‌سایت',
                            'name' => 'website',
                            'value' => $company->website
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'آیدی تلگرام',
                            'name' => 'telegram',
                            'value' => $company->telegram
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'آیدی توییتر',
                            'name' => 'twitter',
                            'value' => $company->twitter
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'آیدی فیس‌بوک',
                            'name' => 'facebook',
                            'value' => $company->facebook
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'آیدی اینستاگرام',
                            'name' => 'instagram',
                            'value' => $company->instagram
                        ])
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="login_remember_box jb_cover">
                        <div class="header_btn search_btn jb_cover">

                            <button>ویرایش شرکت</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection
