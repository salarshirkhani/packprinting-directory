@extends('layouts.dashboard')
@section('title', __('ویرایش محصول'))
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <form method="POST" action="{{ route('dashboard.products.update', ['product' => $product]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @if (count($errors))
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            <div class="job_filter_sidebar_heading jb_cover">
                <h1>ویرایش محصول</h1>
            </div>
            <div class="browse_img_banner jb_cover">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'نام محصول',
                            'name' => 'name',
                            'value' => $product->name
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="select_box">
                            <label>دسته‌بندی</label>
                            <select name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @if(old('category_id', $product->category_id) == $category->id) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="jp_job_post_right_cont edit_profile_wrapper" style="margin-bottom: 25px; width: 100%">
                            <h4>تصویر محصول: JPEG یا PNG</h4>

                            <div class="width_50">
                                <input type="file" name="photo" id="input-file-now-custom-233" accept=".png,.jpg,.jpeg" class="dropify" data-height="90" />
                                <span class="post_photo">انتخاب تصویر</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contect_form3">
                            <label>توضیحات کوتاه</label>
                            <textarea style="height: 6em" rows="4" name="short_description">{{ old('short_description', $product->short_description) }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contect_form3">
                            <label>توضیحات</label>
                            <textarea style="height: 13em" rows="5" name="content">{{ old('content', $product->content) }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'کلمه کلیدی',
                            'name' => 'keyword',
                            'value' => $product->keyword
                        ])
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        @include('partials.form.text', [
                            'label' => 'قیمت',
                            'name' => 'price',
                            'type' => 'number',
                            'value' => $product->price
                        ])
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="login_remember_box jb_cover">
                        <div class="header_btn search_btn jb_cover">

                            <button>ویرایش محصول</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection
