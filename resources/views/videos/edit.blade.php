@extends('layout')

@section('content')
    <div id="all-output" class="col-md-10 upload">
        <div id="upload">
            <div class="row">
                <!-- upload -->
                <div class="col-md-8">
                    <h1 class="page-title"><span>آپلود</span> فیلم</h1>
                    <form method="post" action="{{ route('videos.update', $video->id) }}">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <label>عنوان</label>
                                <input type="text" name="name" value="{{ old('name', $video->name) }}" class="form-control" placeholder="عنوان">
                            </div>
                            <div class="col-md-6">
                                <label>مدت زمان</label>
                                <input type="text" name="length" value="{{ old('length', $video->length) }}" class="form-control" placeholder="مدت زمان">
                            </div>
                            <div class="col-md-6">
                                <label>نام یکتا</label>
                                <input type="text" name="slug" value="{{ old('slug', $video->slug) }}" class="form-control" placeholder="نام یکتا">
                            </div>
                            <div class="col-md-6">
                                <label>آدرس ویدیو</label>
                                <input type="text" name="url" value="{{ old('url', $video->url) }}" class="form-control" placeholder="آدرس ویدیو">
                            </div>
                            <div class="col-md-6">
                                <label>تصویر بند انگشتی</label>
                                <input type="text" name="thumbnail" value="{{ old('thumbnail', $video->thumbnail) }}" class="form-control" placeholder="تصویر بند انگشتی">
                            </div>
                            <div class="col-md-6">
                                <label for="category">دسته بندی</label>
                                <select name="category_id" id="category" class="form-control">
                                    <option value="">دسته بندی ها</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ ($video->category_id == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label>توضیحات</label>
                                <textarea name="description" class="form-control" placeholder="توضیحات" rows="5">{{ old('description', $video->description) }}</textarea>
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
