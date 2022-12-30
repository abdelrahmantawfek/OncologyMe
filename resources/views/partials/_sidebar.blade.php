@if (count($highlights) || count($latest_news) || count($top_banners) || count($bottom_banners))
<div class="col-md-4 tblt-nn">
    <div class="banr-box">
    <div class="owl-carousel top-banner">
        @foreach ($top_banners as $item)
        <div> 
            <a href="{{$item->url}}" target="_blank">
                <img class="d-block w-100" src="{{ asset('uploads/'.$item->desktop_image) }}">
            </a>
        </div>
        @endforeach
    </div>
    </div>
    <div class="topics-box-clmn">
        <!-- TIN Calendar -->
        <div class="topics-box">
        @include('partials._highlights-sidebar')
        </div>
    </div>
    <div class="topics-box">
        @include('partials._latest-articles-sidebar')
    </div>

    <div class="banr-box">
    <div class="owl-carousel bottom-banner">
        @foreach ($bottom_banners as $item)
        <div> 
            <a href="{{$item->url}}" target="_blank">
                <img class="d-block w-100" src="{{ asset('uploads/'.$item->desktop_image) }}">
            </a>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endif