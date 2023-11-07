@extends('client.layouts.page')

@section('title') صفحه اصلی @endsection


@section('container')

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
