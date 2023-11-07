@extends('admin.layouts.page')

@section('title') دسته بندی جدید @endsection

@section('main-title') دسته بندی ها @endsection

@section('main-subject') ساخت دسته بندی جدید @endsection

@section('container')
    <div class="jumbotron shade pt-5">
        <h1>دسته بندی</h1>
        <p class="c-grey font-weight-light font-italic"> با استفاده از فرم زیر، یک دسته بندی جدید در وبلاگ خودتان ایجاد کنید<br>
                <h4 class="c-grey  pt-3 pb-3">دسته بندی جدید</h4>
                <hr class="mt-0 mb-4">
                <form class="p-2" action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="form-group bmd-form-group">
                        <label for="exampleFormControlInput1" class="bmd-label-static">عنوان</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="عنوان دسته بندی جدید را وارد کنید">
                    </div>

                    <div class="form-group bmd-form-group">
                        <label for="exampleFormControlInput1" class="bmd-label-static">نامک</label>
                        <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="نامک (اسلاگ) دسته بندی جدید را وارد کنید">
                    </div>

                    <div class="form-group bmd-form-group is-filled">
                        <label for="exampleFormControlSelect1" class="bmd-label-static">دسته بندی مادر</label>
                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                            <option value="" disabled selected>ندارد</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-1">
                        <button type="submit" class="btn btn-block f-primary ">ثبت</button>
                    </div>
                </form>
                @include('admin.messages.successOrError')
                @include('admin.messages.errors')
            </div>
@endsection
