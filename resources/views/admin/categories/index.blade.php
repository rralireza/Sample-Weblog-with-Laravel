@extends('admin.layouts.page')

@section('title') دسته بندی ها @endsection

@section('main-title') دسته بندی ها @endsection

@section('main-subject') مدیریت دسته بندی ها @endsection

@section('container')

    <div class="col-xs-1 col-sm-1 col-md-8 col-lg-12 p-2">
        <div class="card shade h-100">
            <div class="card-body">
                <h5 class="card-title">اطلاعات دسته بندی ها در قالب جدول</h5>

                <hr>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">عنوان</th>
                        <th scope="col">دسته بندی مادر</th>
                        <th scope="col">ویرایش</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->title }}</th>
                            <td>
                                @if (! optional($category->parent)->title)
                                    {{ "دسته اصلی" }}
                                @else
                                    {{ optional($category->parent)->title }}
                                @endif
                            </td>
                            <td><a href="{{ route('categories.edit' , $category) }}" class="btn btn-primary">ویرایش</a></td>
                            <td>
                                <form action="{{ route('categories.delete' , $category) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                @include('admin.messages.successOrError')
            </div>

        </div>
    </div>

@endsection
