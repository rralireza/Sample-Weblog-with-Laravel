@extends('client.singlePageLayouts.page')

@section('title') {{ $post->title }} @endsection

@section('container')

    <div class="sn-container" style="text-align: right; font-family: 'B Badr';">
        <div class="sn-img">
            <img src="{{ asset(str_replace('public' , '/storage' , $post->image)) }}" />
        </div>
        <div class="sn-content">
            <h1 class="sn-title">{{ $post->title }}</h1>
            <p style="direction: rtl; font-size: 18pt; text-align: justify;">
                {{ $post->content }}
            </p>

        </div>
        <p>
          نویسنده: <a href="">{{ $post->user->name }}  {{ $post->user->lastname }}</a>
        </p>
        <p>
            تاریخ انتشار: {{ jdate($post->created_at)->format('%A, %d %B %Y ، H:i') }}
        </p>
        @if ($post->created_at != $post->updated_at)
            تاریخ بروزرسانی:{{ jdate($post->updated_at)->format('%A, %d %B %Y ، H:i') }}
        @endif
    </div>

@endsection
