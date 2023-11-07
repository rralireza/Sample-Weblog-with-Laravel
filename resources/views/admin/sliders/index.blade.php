@extends('admin.layouts.page')

@section('title') اسلایدرها @endsection

@section('main-title') اسلایدرها @endsection

@section('main-subject') مدیریت اسلایدرها @endsection

@section('container')

    <div class="col-xs-1 col-sm-1 col-md-8 col-lg-12 p-2">
        <div class="card shade h-100">
            <div class="card-body">
                <h5 class="card-title">اطلاعات اسلایدرها در قالب جدول</h5>

                <form action="{{ route('sliders.search') }}" method="get">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="جستجو...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i> جستجو
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <hr>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">عنوان</th>
                        <th scope="col">تاریخ انتشار</th>
                        <th scope="col">تصویر</th>
                        <th scope="col">ویرایش</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <th scope="row">{{ $slider->title }}</th>
                            <td>{{ jdate($slider->created_at)->format('%A, %d %B %Y ، H:i') }}</td>
                            <td>
                                <img src="{{ asset(str_replace('public' , '/storage' , $slider->image)) }}" alt="{{ $slider->title }}" width="100px" height="55px">
                            </td>
                            <td><a href="{{ route('sliders.edit' , $slider) }}" class="btn btn-primary">ویرایش</a></td>
                            <td>
                                <form action="{{ route('sliders.delete' , $slider) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $sliders->links() }}
                @include('admin.messages.successOrError')
            </div>

        </div>
    </div>

@endsection
