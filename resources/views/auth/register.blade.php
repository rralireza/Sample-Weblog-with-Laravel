@extends('auth.layouts.page')

@section('title')
    Register
@endsection

@section('container')

    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated ">
        <main class="bmd-layout-content">
            <div class="container-fluid">
                <div class="main_wrapper">


                    <!-- form -->

                    <div class="row ">
                        <div class="col-md-5 card shade mw-center mh-center">
                            <img src="{{ asset('admin/svg/logo.svg') }}" alt="..." class="mw-center " height="130"
                                 width="300">
                            <hr class="hr-dashed m-0">
                            <form action="{{ route('registerStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">نام</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="نام خودتان را وارد کنید">
                                </div>

                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">نام خانوادگی</label>
                                    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="نام خانوادگی خودتان را وارد کنید">
                                </div>


                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">ایمیل</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="ایمیل خودتان را وارد کنید">

                                </div>

                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">شماره موبایل</label>
                                    <input type="text" name="phonenumber" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp"
                                           placeholder="شماره تلفن همراه خودتان را وارد کنید">
                                </div>

                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">نام کاربری</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="نام کاربری موردنظر را وارد کنید">
                                </div>


                                <div class="form-group m-0">
                                    <label for="exampleInputPassword1">رمز عبور</label>
                                    <input type="password" name="password" class="form-control"
                                           id="exampleInputPassword1"
                                           placeholder="رمز عبور موردنظر خودتان را وارد کنید (حداقل ۸ و حداکثر ۳۲ کاراکتر)">
                                </div>

                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">تصویر پروفایل</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Enter firstname">
                                </div>

                                <button type="submit" class="btn shade f-primary btn-block">ثبت نام</button>

                                @if(Session::has('success'))
                                    <i class="btn btn-success">{{ Session::get('success') }}</i>
                                @endif

                                @include('admin.messages.errors')
                            </form>
                        </div>

                    </div>
                    <!--  -->


                </div>

            </div>
        </main>
    </div>

@endsection
