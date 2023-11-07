@extends('client.layouts.page')

@section('title') Test @endsection

@section('container')
{{--    <div class="container">--}}
{{--        <h1>In this page, based on category slug, we should see articles of that category</h1>--}}
{{--        <h2>For example:</h2>--}}
{{--        <h3>Article 3 - Article 18 - Article 21 - Article 93</h3>--}}
{{--        <h4>Related Category: Category 4</h4>--}}
{{--    </div>--}}

        <div class="col-lg-9">
            <div class="row" style="direction: rtl; text-align: right;">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="{{ asset(str_replace('public' , '/storage' , $post->image)) }}" alt="{{ $post->title }}" width="255" height="162">
                            <div class="mn-title">
                                <a href="/articles/{{ $post->slug }}">{{ $post->title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $posts->links() }}
        </div>

@endsection
