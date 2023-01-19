@if (count($latest_news))

<div class="topics-box-header">
    <h4>Latest Articles</h4>
</div>
<div class="article-home-sidebar">
    @foreach ($latest_news as $post)
    <h5>
        <a href="{{ '/'.$post->post_type.'/'.$post->slug}}" class="mostRead">
        {{-- @foreach ($post->postmeta->where('meta_key', '_featured_image') as $key => $value)
            <img src="{{ asset('uploads/'.$value->meta_value )}}" alt="{{$value->meta_value}}">
        @endforeach
        @if (!count($post->postmeta->where('meta_key', '_featured_image')) )
            <img src="{{ asset('uploads/d-post.jpeg')}}" alt="oncologyme">
        @endif --}}
            <div class="topic-link"> {{ implode(' ', array_slice(explode(' ', $post->title), 0, 10)) }}@if ( str_word_count($post->title) > 10 )...@endif</div>
            
        </a>
    </h5>
    @endforeach
   
    <div class="link-bottom-tio"><a href="/all-articles" class="todayinonc">View More&nbsp;<span class="triangle-link fa fa-angle-right"></span></a></div>
</div>

@endif