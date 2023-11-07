@extends('auth.layouts.page')

@section('title')
    Login
@endsection

@section('container')

    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated ">
        <main class="bmd-layout-content">
            <div class="container-fluid">
                <div class="main_wrapper">


                    <!-- form -->

                    <div class="row" style="direction: rtl;">
                        <div class="col-md-5 card shade mw-center mh-center">
                            <img src="{{ asset('admin/svg/logo.svg') }}" alt="..." class="mw-center " height="130"
                                 width="300">
                            <hr class="hr-dashed m-0">
                            <form action="{{ route('loginStore') }}" method="post">
                                @csrf
                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">نام کاربری</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="نام کاربری خودتان را وارد کنید">
                                </div>
                                <div class="form-group m-0">
                                    <label for="exampleInputPassword1">رمز عبور</label>
                                    <input type="password" name="password" class="form-control"
                                           id="exampleInputPassword1"
                                           placeholder="رمزعبور را وارد کنید">
                                </div>
                                <button type="submit" class="btn shade f-primary btn-block">ورود</button>
                            </form>

                            <a href="{{ route('register') }}">حساب کاربری ندارید؟ کلیک کنید</a>

                        </div>
                        @include('admin.messages.errors')

                    </div>
                    <!--  -->


                </div>

            </div>
        </main>
    </div>

@endsection
