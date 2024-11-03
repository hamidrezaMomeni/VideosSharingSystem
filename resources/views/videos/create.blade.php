@extends('layout')

@section('content')
    <div id="all-output" class="col-md-10 upload">
        <div id="upload">
            <div class="row">
                <!-- upload -->
                <div class="col-md-8">
                    <h1 class="page-title"><span>آپلود</span> فیلم</h1>
                    <form method="post" action="{{ route('videos.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>عنوان</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="عنوان">
                            </div>
                            <div class="col-md-6">
                                <label>مدت زمان</label>
                                <input type="text" name="length" value="{{ old('length') }}" class="form-control" placeholder="مدت زمان">
                            </div>
                            <div class="col-md-6">
                                <label>نام یکتا</label>
                                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" placeholder="نام یکتا">
                            </div>
                            <div class="col-md-6">
                                <label>آدرس ویدیو</label>
                                <input type="text" name="url" value="{{ old('url') }}" class="form-control" placeholder="آدرس ویدیو">
                            </div>
                            <div class="col-md-6">
                                <label>تصویر بند انگشتی</label>
                                <input type="text" name="thumbnail" value="{{ old('thumbnail') }}" class="form-control" placeholder="تصویر بند انگشتی">
                            </div>
                            <div class="col-md-12">
                                <label>توضیحات</label>
                                <textarea name="description" class="form-control" placeholder="توضیحات" rows="5">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                            </div>
                        </div>
                    </form>
                </div><!-- // col-md-8 -->

                <div class="col-md-4">
                    <a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
                </div><!-- // col-md-8 -->
                <!-- // upload -->
            </div><!-- // row -->
        </div><!-- // upload -->
    </div>
@endsection
