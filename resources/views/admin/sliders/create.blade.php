@extends('admin.layouts.page')

@section('title') اسلاید جدید @endsection

@section('main-title') اسلایدرها @endsection

@section('main-subject') ایجاد یک اسلاید جدید @endsection

@section('container')
    <div class="jumbotron shade pt-5">
        <h1>اسلایدر</h1>
        <p class="c-grey font-weight-light font-italic"> با استفاده از فرم زیر، یک اسلایدر جدید در وبلاگ خودتان ایجاد کنید<br>
        <h4 class="c-grey  pt-3 pb-3">اسلاید جدید</h4>
        <hr class="mt-0 mb-4">
        <form class="p-2" action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group bmd-form-group">
                <label for="exampleFormControlInput1" class="bmd-label-static">عنوان</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="عنوان را وارد کنید">
            </div>

            <div class="form-group bmd-form-group">
                <label for="exampleFormControlInput1" class="bmd-label-static">نامک</label>
                <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="نامک (اسلاگ) را وارد کنید">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">انتخاب تصویر</label>
                </div>
            </div>

            <div class="col-1">
                <button type="submit" class="btn btn-block f-primary ">ثبت</button>
            </div>
        </form>
        @include('admin.messages.successOrError')
        @include('admin.messages.errors')
    </div>
@endsection
