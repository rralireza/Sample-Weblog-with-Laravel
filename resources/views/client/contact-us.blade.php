@extends('client.singlePageLayouts.page')

@section('title') تماس با ما @endsection

@section('container')

    <div class="container" style="margin-bottom: 20px; text-align: right; direction: rtl;">
        <h1>تماس با ما</h1>
        <form>
            <div class="form-group">
                <label for="name">نام و نام خانوادگی:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="name">شماره تماس:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">ایمیل:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="gender">Gender:</label>--}}
{{--                <select class="form-control" id="gender">--}}
{{--                    <option value="male">Male</option>--}}
{{--                    <option value="female">Female</option>--}}
{{--                    <option value="other">Other</option>--}}
{{--                </select>--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="description">توضیحات:</label>
                <textarea class="form-control" rows="5" cols="30" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ارسال</button>
        </form>
    </div>

@endsection
