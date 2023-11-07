@extends('admin.layouts.page')

@section('title') ویرایش اسلاید @endsection

@section('main-title') اسلایدرها @endsection

@section('main-subject') ویرایش اسلایدهای ایجاد شده @endsection

@section('container')
    <div class="jumbotron shade pt-5">
        <h1>اسلایدر</h1>
        <p class="c-grey font-weight-light font-italic"> با استفاده از فرم زیر، اسلایدر موردنظر خودتان را ویرایش کنید<br>
        <h4 class="c-grey  pt-3 pb-3">ویرایش</h4>
        <hr class="mt-0 mb-4">
        <form class="p-2" action="{{ route('sliders.update' , $slider) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group bmd-form-group">
                <label for="exampleFormControlInput1" class="bmd-label-static">عنوان</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="عنوان را وارد کنید" value="{{ $slider->title }}">
            </div>

            <div class="form-group bmd-form-group">
                <label for="exampleFormControlInput1" class="bmd-label-static">نامک</label>
                <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="نامک (اسلاگ) را وارد کنید" value="{{ $slider->slug }}">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
                </div>
            </div>

            <img src="{{ asset(str_replace('public' , '/storage' , $slider->image)) }}" alt="{{ $slider->title }}" width="50px" height="50px">

            <div class="col-1">
                <button type="submit" class="btn btn-block f-primary ">ویرایش</button>
            </div>
        </form>
        @include('admin.messages.successOrError')
        @include('admin.messages.errors')
    </div>
@endsection
