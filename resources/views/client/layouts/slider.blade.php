<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 tn-left">
                <div class="row tn-slider">
                    @foreach($slides as $slide)
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ asset(str_replace('public' , '/storage' , $slide->image)) }}" width="550" height="350" />
                            <div class="tn-title">
                                <a href="{{ $slide->slug }}">{{ $slide->title }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 tn-right">
                <div class="row">
                    @foreach($sliderPosts as $slider)
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ asset(str_replace('public' , '/storage' , $slider->image)) }}" width="270" height="172" />
                            <div class="tn-title">
                                <a href="{{ $slider->slug }}">{{ $slider->title }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top News End-->
