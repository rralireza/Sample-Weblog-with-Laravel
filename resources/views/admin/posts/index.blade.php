@extends('admin.layouts.page')

@section('title') نوشته ها @endsection

@section('main-title') نوشته ها @endsection

@section('main-subject') مدیریت نوشته ها @endsection

@section('container')

    <div class="col-xs-1 col-sm-1 col-md-8 col-lg-12 p-2">
        <div class="card shade h-100">
            <div class="card-body">
                <h5 class="card-title">اطلاعات نوشته ها در قالب جدول</h5>

                <form action="{{ route('posts.search') }}" method="get">
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
                        <th scope="col">زیر عنوان</th>
                        <th scope="col">دسته بندی</th>
                        <th scope="col">نویسنده</th>
                        <th scope="col">تاریخ انتشار</th>
                        <th scope="col">آخرین بروزرسانی</th>
                        <th scope="col">تصویر</th>
                        <th scope="col">ویرایش</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->title }}</th>
                            <td>{{ $post->sub_title }}</td>
                            <td>{{ $post->category->title }}</td>
                            <td>{{ $post->user->name }} {{ $post->user->lastname }}</td>
                            <td>{{ jdate($post->created_at)->format('%A, %d %B %Y ، H:i') }}</td>
                            <td>{{ jdate($post->updated_at)->format('%A, %d %B %Y') }}</td>
                            <td>
                                <img src="{{ asset(str_replace('public' , '/storage' , $post->image)) }}" alt="{{ $post->title }}" width="100px" height="55px">
                            </td>
                            <td><a href="{{ route('posts.edit' , $post) }}" class="btn btn-primary">ویرایش</a></td>
                            <td>
                                <form action="{{ route('posts.delete' , $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach



                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                        </ul>
                    </nav>

                    </tbody>
                </table>
                {{ $posts->links() }}
                @include('admin.messages.successOrError')
            </div>

        </div>
    </div>

@endsection
