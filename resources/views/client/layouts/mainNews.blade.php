<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            @yield('container')

            <div class="col-lg-3" style="
                direction: rtl;
                text-align: right;
                ">
                <div class="mn-list">
                    <h2>بیشتر بخوانید</h2>
                    <ul>
                        @foreach($readPosts as $readMore)
                            <li><a href="/articles/{{ $readMore->slug }}">{{ $readMore->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->
