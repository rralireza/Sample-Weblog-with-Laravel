@extends('admin.layouts.page')

@section('title') ویرایش نوشته @endsection

@section('main-title') نوشته ها @endsection

@section('main-subject') ویرایش نوشته ایجاد شده @endsection

@section('container')
    <div class="jumbotron shade pt-5">
        <h1>نوشته</h1>
        <p class="c-grey font-weight-light font-italic"> با استفاده از فرم زیر، نوشته خودتان را بروزرسانی کنید<br>
        <h4 class="c-grey  pt-3 pb-3">ویرایش نوشته</h4>
        <hr class="mt-0 mb-4">
        <form class="p-2" action="{{ route('posts.update' , $post) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group bmd-form-group">
                <label for="exampleFormControlInput1" class="bmd-label-static">عنوان</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="عنوان را وارد کنید" value="{{ $post->title }}">
            </div>

            <div class="form-group bmd-form-group">
                <label for="exampleFormControlInput1" class="bmd-label-static">زیر عنوان</label>
                <input type="text" name="sub_title" class="form-control" id="exampleFormControlInput1" placeholder="زیر عنوان را وارد کنید" value="{{ $post->sub_title }}">
            </div>

            <div class="form-group bmd-form-group">
                <label for="exampleFormControlInput1" class="bmd-label-static">نامک</label>
                <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="نامک (اسلاگ) را وارد کنید" value="{{ $post->slug }}">
            </div>

            <div class="form-group bmd-form-group is-filled">
                <label for="exampleFormControlSelect1" class="bmd-label-static">دسته بندی</label>
                <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach($categories as $category)
                        <option
                            @if($category->id == $post->category->category_id)
                                selected
                            @endif
                            value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group bmd-form-group">
                <label for="exampleFormControlTextarea1" class="bmd-label-static">متن نوشته</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post->content }}</textarea>
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
                </div>
            </div>

            <img src="{{ asset(str_replace('public' , '/storage' , $post->image)) }}" alt="{{ $post->title }}" width="50px">

            <div class="col-1">
                <button type="submit" class="btn btn-block f-primary ">ویرایش</button>
            </div>
        </form>
        @include('admin.messages.successOrError')
        @include('admin.messages.errors')
    </div>
@endsection
